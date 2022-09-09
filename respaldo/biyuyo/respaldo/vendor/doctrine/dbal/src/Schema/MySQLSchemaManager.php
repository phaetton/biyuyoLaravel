<?php

namespace Doctrine\DBAL\Schema;

use Doctrine\DBAL\Platforms\AbstractMySQLPlatform;
use Doctrine\DBAL\Platforms\MariaDb1027Platform;
use Doctrine\DBAL\Platforms\MySQL;
use Doctrine\DBAL\Platforms\MySQL\CollationMetadataProvider\CachingCollationMetadataProvider;
use Doctrine\DBAL\Platforms\MySQL\CollationMetadataProvider\ConnectionCollationMetadataProvider;
use Doctrine\DBAL\Result;
use Doctrine\DBAL\Types\Type;

use function array_change_key_case;
use function array_shift;
use function assert;
use function explode;
use function implode;
use function is_string;
use function preg_match;
use function strpos;
use function strtok;
use function strtolower;
use function strtr;

use const CASE_LOWER;

/**
 * Schema manager for the MySQL RDBMS.
 *
 * @extends AbstractSchemaManager<AbstractMySQLPlatform>
 */
class MySQLSchemaManager extends AbstractSchemaManager
{
    /** @see https://mariadb.com/kb/en/library/string-literals/#escape-sequences */
    private const MARIADB_ESCAPE_SEQUENCES = [
        '\\0' => "\0",
        "\\'" => "'",
        '\\"' => '"',
        '\\b' => "\b",
        '\\n' => "\n",
        '\\r' => "\r",
        '\\t' => "\t",
        '\\Z' => "\x1a",
        '\\\\' => '\\',
        '\\%' => '%',
        '\\_' => '_',

        // Internally, MariaDB escapes single quotes using the standard syntax
        "''" => "'",
    ];

    /**
     * {@inheritDoc}
     */
    public function listTableNames()
    {
        return $this->doListTableNames();
    }

    /**
     * {@inheritDoc}
     */
    public function listTables()
    {
        return $this->doListTables();
    }

    /**
     * {@inheritDoc}
     */
    public function listTableDetails($name)
    {
        return $this->doListTableDetails($name);
    }

    /**
     * {@inheritDoc}
     */
    public function listTableColumns($table, $database = null)
    {
        return $this->doListTableColumns($table, $database);
    }

    /**
     * {@inheritDoc}
     */
    public function listTableIndexes($table)
    {
        return $this->doListTableIndexes($table);
    }

    /**
     * {@inheritDoc}
     */
    public function listTableForeignKeys($table, $database = null)
    {
        return $this->doListTableForeignKeys($table, $database);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableViewDefinition($view)
    {
        return new View($view['TABLE_NAME'], $view['VIEW_DEFINITION']);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableDefinition($table)
    {
        return array_shift($table);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableIndexesList($tableIndexes, $tableName = null)
    {
        foreach ($tableIndexes as $k => $v) {
            $v = array_change_key_case($v, CASE_LOWER);
            if ($v['key_name'] === 'PRIMARY') {
                $v['primary'] = true;
            } else {
                $v['primary'] = false;
            }

            if (strpos($v['index_type'], 'FULLTEXT') !== false) {
                $v['flags'] = ['FULLTEXT'];
            } elseif (strpos($v['index_type'], 'SPATIAL') !== false) {
                $v['flags'] = ['SPATIAL'];
            }

            // Ignore prohibited prefix `length` for spatial index
            if (strpos($v['index_type'], 'SPATIAL') === false) {
                $v['length'] = isset($v['sub_part']) ? (int) $v['sub_part'] : null;
            }

            $tableIndexes[$k] = $v;
        }

        return parent::_getPortableTableIndexesList($tableIndexes, $tableName);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableDatabaseDefinition($database)
    {
        return $database['Database'];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition($tableColumn)
    {
        $tableColumn = array_change_key_case($tableColumn, CASE_LOWER);

        $dbType = strtolower($tableColumn['type']);
        $dbType = strtok($dbType, '(), ');
        assert(is_string($dbType));

        $length = $tableColumn['length'] ?? strtok('(), ');

        $fixed = null;

        if (! isset($tableColumn['name'])) {
            $tableColumn['name'] = '';
        }

        $scale     = null;
        $precision = null;

        $type = $this->_platform->getDoctrineTypeMapping($dbType);

        // In cases where not connected to a database DESCRIBE $table does not return 'Comment'
        if (isset($tableColumn['comment'])) {
            $type                   = $this->extractDoctrineTypeFromComment($tableColumn['comment'], $type);
            $tableColumn['comment'] = $this->removeDoctrineTypeFromComment($tableColumn['comment'], $type);
        }

        switch ($dbType) {
            case 'char':
            case 'binary':
                $fixed = true;
                break;

            case 'float':
            case 'double':
            case 'real':
            case 'numeric':
            case 'decimal':
                if (
                    preg_match(
                        '([A-Za-z]+\(([0-9]+),([0-9]+)\))',
                        $tableColumn['type'],
                        $match,
                    ) === 1
                ) {
                    $precision = $match[1];
                    $scale     = $match[2];
                    $length    = null;
                }

                break;

            case 'tinytext':
                $length = AbstractMySQLPlatform::LENGTH_LIMIT_TINYTEXT;
                break;

            case 'text':
                $length = AbstractMySQLPlatform::LENGTH_LIMIT_TEXT;
                break;

            case 'mediumtext':
                $length = AbstractMySQLPlatform::LENGTH_LIMIT_MEDIUMTEXT;
                break;

            case 'tinyblob':
                $length = AbstractMySQLPlatform::LENGTH_LIMIT_TINYBLOB;
                break;

            case 'blob':
                $length = AbstractMySQLPlatform::LENGTH_LIMIT_BLOB;
                break;

            case 'mediumblob':
                $length = AbstractMySQLPlatform::LENGTH_LIMIT_MEDIUMBLOB;
                break;

            case 'tinyint':
            case 'smallint':
            case 'mediumint':
            case 'int':
            case 'integer':
            case 'bigint':
            case 'year':
                $length = null;
                break;
        }

        if ($this->_platform instanceof MariaDb1027Platform) {
            $columnDefault = $this->getMariaDb1027ColumnDefault($this->_platform, $tableColumn['default']);
        } else {
            $columnDefault = $tableColumn['default'];
        }

        $options = [
            'length'        => $length !== null ? (int) $length : null,
            'unsigned'      => strpos($tableColumn['type'], 'unsigned') !== false,
            'fixed'         => (bool) $fixed,
            'default'       => $columnDefault,
            'notnull'       => $tableColumn['null'] !== 'YES',
            'scale'         => null,
            'precision'     => null,
            'autoincrement' => strpos($tableColumn['extra'], 'auto_increment') !== false,
            'comment'       => isset($tableColumn['comment']) && $tableColumn['comment'] !== ''
                ? $tableColumn['comment']
                : null,
        ];

        if ($scale !== null && $precision !== null) {
            $options['scale']     = (int) $scale;
            $options['precision'] = (int) $precision;
        }

        $column = new Column($tableColumn['field'], Type::getType($type), $options);

        if (isset($tableColumn['characterset'])) {
            $column->setPlatformOption('charset', $tableColumn['characterset']);
        }

        if (isset($tableColumn['collation'])) {
            $column->setPlatformOption('collation', $tableColumn['collation']);
        }

        return $column;
    }

    /**
     * Return Doctrine/Mysql-compatible column default values for MariaDB 10.2.7+ servers.
     *
     * - Since MariaDb 10.2.7 column defaults stored in information_schema are now quoted
     *   to distinguish them from expressions (see MDEV-10134).
     * - CURRENT_TIMESTAMP, CURRENT_TIME, CURRENT_DATE are stored in information_schema
     *   as current_timestamp(), currdate(), currtime()
     * - Quoted 'NULL' is not enforced by Maria, it is technically possible to have
     *   null in some circumstances (see https://jira.mariadb.org/browse/MDEV-14053)
     * - \' is always stored as '' in information_schema (normalized)
     *
     * @link https://mariadb.com/kb/en/library/information-schema-columns-table/
     * @link https://jira.mariadb.org/browse/MDEV-13132
     *
     * @param string|null $columnDefault default value as stored in information_schema for MariaDB >= 10.2.7
     */
    private function getMariaDb1027ColumnDefault(MariaDb1027Platform $platform, ?string $columnDefault): ?string
    {
        if ($columnDefault === 'NULL' || $columnDefault === null) {
            return null;
        }

        if (preg_match('/^\'(.*)\'$/', $columnDefault, $matches) === 1) {
            return strtr($matches[1], self::MARIADB_ESCAPE_SEQUENCES);
        }

        switch ($columnDefault) {
            case 'current_timestamp()':
                return $platform->getCurrentTimestampSQL();

            case 'curdate()':
                return $platform->getCurrentDateSQL();

            case 'curtime()':
                return $platform->getCurrentTimeSQL();
        }

        return $columnDefault;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableForeignKeysList($tableForeignKeys)
    {
        $list = [];
        foreach ($tableForeignKeys as $value) {
            $value = array_change_key_case($value, CASE_LOWER);
            if (! isset($list[$value['constraint_name']])) {
                if (! isset($value['delete_rule']) || $value['delete_rule'] === 'RESTRICT') {
                    $value['delete_rule'] = null;
                }

                if (! isset($value['update_rule']) || $value['update_rule'] === 'RESTRICT') {
                    $value['update_rule'] = null;
                }

                $list[$value['constraint_name']] = [
                    'name' => $value['constraint_name'],
                    'local' => [],
                    'foreign' => [],
                    'foreignTable' => $value['referenced_table_name'],
                    'onDelete' => $value['delete_rule'],
                    'onUpdate' => $value['update_rule'],
                ];
            }

            $list[$value['constraint_name']]['local'][]   = $value['column_name'];
            $list[$value['constraint_name']]['foreign'][] = $value['referenced_column_name'];
        }

        return parent::_getPortableTableForeignKeysList($list);
    }

    /**
     * {@inheritDoc}
     */
    protected function _getPortableTableForeignKeyDefinition($tableForeignKey): ForeignKeyConstraint
    {
        return new ForeignKeyConstraint(
            $tableForeignKey['local'],
            $tableForeignKey['foreignTable'],
            $tableForeignKey['foreign'],
            $tableForeignKey['name'],
            [
                'onDelete' => $tableForeignKey['onDelete'],
                'onUpdate' => $tableForeignKey['onUpdate'],
            ],
        );
    }

    public function createComparator(): Comparator
    {
        return new MySQL\Comparator(
            $this->_platform,
            new CachingCollationMetadataProvider(
                new ConnectionCollationMetadataProvider($this->_conn),
            ),
        );
    }

    protected function selectTableNames(string $databaseName): Result
    {
        $sql = <<<'SQL'
SELECT TABLE_NAME
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = ?
  AND TABLE_TYPE = 'BASE TABLE'
ORDER BY TABLE_NAME
SQL;

        return $this->_conn->executeQuery($sql, [$databaseName]);
    }

    protected function selectTableColumns(string $databaseName, ?string $tableName = null): Result
    {
        $sql = 'SELECT';

        if ($tableName === null) {
            $sql .= ' c.TABLE_NAME,';
        }

        $sql .= <<<'SQL'
       c.COLUMN_NAME        AS field,
       c.COLUMN_TYPE        AS type,
       c.IS_NULLABLE        AS `null`,
       c.COLUMN_KEY         AS `key`,
       c.COLUMN_DEFAULT     AS `default`,
       c.EXTRA,
       c.COLUMN_COMMENT     AS comment,
       c.CHARACTER_SET_NAME AS characterset,
       c.COLLATION_NAME     AS collation
FROM information_schema.COLUMNS c
    INNER JOIN information_schema.TABLES t
        ON t.TABLE_NAME = c.TABLE_NAME
SQL;

        // The schema name is passed multiple times as a literal in the WHERE clause instead of using a JOIN condition
        // in order to avoid performance issues on MySQL older than 8.0 and the corresponding MariaDB versions
        // caused by https://bugs.mysql.com/bug.php?id=81347
        $conditions = ['c.TABLE_SCHEMA = ?', 't.TABLE_SCHEMA = ?', "t.TABLE_TYPE = 'BASE TABLE'"];
        $params     = [$databaseName, $databaseName];

        if ($tableName !== null) {
            $conditions[] = 't.TABLE_NAME = ?';
            $params[]     = $tableName;
        }

        $sql .= ' WHERE ' . implode(' AND ', $conditions) . ' ORDER BY ORDINAL_POSITION';

        return $this->_conn->executeQuery($sql, $params);
    }

    protected function selectIndexColumns(string $databaseName, ?string $tableName = null): Result
    {
        $sql = 'SELECT';

        if ($tableName === null) {
            $sql .= ' TABLE_NAME,';
        }

        $sql .= <<<'SQL'
        NON_UNIQUE  AS Non_Unique,
        INDEX_NAME  AS Key_name,
        COLUMN_NAME AS Column_Name,
        SUB_PART    AS Sub_Part,
        INDEX_TYPE  AS Index_Type
FROM information_schema.STATISTICS
SQL;

        $conditions = ['TABLE_SCHEMA = ?'];
        $params     = [$databaseName];

        if ($tableName !== null) {
            $conditions[] = 'TABLE_NAME = ?';
            $params[]     = $tableName;
        }

        $sql .= ' WHERE ' . implode(' AND ', $conditions) . ' ORDER BY SEQ_IN_INDEX';

        return $this->_conn->executeQuery($sql, $params);
    }

    protected function selectForeignKeyColumns(string $databaseName, ?string $tableName = null): Result
    {
        $sql = 'SELECT DISTINCT';

        if ($tableName === null) {
            $sql .= ' k.TABLE_NAME,';
        }

        $sql .= <<<'SQL'
            k.CONSTRAINT_NAME,
            k.COLUMN_NAME,
            k.REFERENCED_TABLE_NAME,
            k.REFERENCED_COLUMN_NAME,
            k.ORDINAL_POSITION /*!50116,
            c.UPDATE_RULE,
            c.DELETE_RULE */
FROM information_schema.key_column_usage k /*!50116
INNER JOIN information_schema.referential_constraints c
ON c.CONSTRAINT_NAME = k.CONSTRAINT_NAME
AND c.TABLE_NAME = k.TABLE_NAME
AND c.CONSTRAINT_SCHEMA = k.TABLE_SCHEMA */
SQL;

        $conditions = ['k.TABLE_SCHEMA = ?'];
        $params     = [$databaseName];

        if ($tableName !== null) {
            $conditions[] = 'k.TABLE_NAME = ?';
            $params[]     = $tableName;
        }

        $conditions[] = 'k.REFERENCED_COLUMN_NAME IS NOT NULL';

        $sql .= ' WHERE ' . implode(' AND ', $conditions) . ' ORDER BY k.ORDINAL_POSITION';

        return $this->_conn->executeQuery($sql, $params);
    }

    /**
     * {@inheritDoc}
     */
    protected function fetchTableOptionsByTable(string $databaseName, ?string $tableName = null): array
    {
        $sql = <<<'SQL'
    SELECT t.TABLE_NAME,
           t.ENGINE,
           t.AUTO_INCREMENT,
           t.TABLE_COMMENT,
           t.CREATE_OPTIONS,
           t.TABLE_COLLATION,
           ccsa.CHARACTER_SET_NAME
      FROM information_schema.TABLES t
        INNER JOIN information_schema.COLLATION_CHARACTER_SET_APPLICABILITY ccsa
            ON ccsa.COLLATION_NAME = t.TABLE_COLLATION
SQL;

        $conditions = ['t.TABLE_SCHEMA = ?'];
        $params     = [$databaseName];

        if ($tableName !== null) {
            $conditions[] = 't.TABLE_NAME = ?';
            $params[]     = $tableName;
        }

        $conditions[] = "t.TABLE_TYPE = 'BASE TABLE'";

        $sql .= ' WHERE ' . implode(' AND ', $conditions);

        /** @var array<string,array<string,mixed>> $metadata */
        $metadata = $this->_conn->executeQuery($sql, $params)
            ->fetchAllAssociativeIndexed();

        $tableOptions = [];
        foreach ($metadata as $table => $data) {
            $data = array_change_key_case($data, CASE_LOWER);

            $tableOptions[$table] = [
                'engine'         => $data['engine'],
                'collation'      => $data['table_collation'],
                'charset'        => $data['character_set_name'],
                'autoincrement'  => $data['auto_increment'],
                'comment'        => $data['table_comment'],
                'create_options' => $this->parseCreateOptions($data['create_options']),
            ];
        }

        return $tableOptions;
    }

    /** @return string[]|true[] */
    private function parseCreateOptions(?string $string): array
    {
        $options = [];

        if ($string === null || $string === '') {
            return $options;
        }

        foreach (explode(' ', $string) as $pair) {
            $parts = explode('=', $pair, 2);

            $options[$parts[0]] = $parts[1] ?? true;
        }

        return $options;
    }
}

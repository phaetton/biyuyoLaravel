<?php
session_start();
require_once '../conexion/conexion.php';
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8"); // <--utf8

    $sql = "SELECT * FROM tipo";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $Atipo = $statement->fetchALL();
    $cantidadc = count($Atipo);

    $sql = "SELECT * FROM categorias";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $Acategorias = $statement->fetchALL();
    $cantidadc = count($Anegocio);

    $sql = "SELECT * FROM negocio";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $Anegocio = $statement->fetchALL();
    $cantidadc = count($Anegocio);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$pdo = null;

/**************************/
if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php session_unset();
} ?>
<?php
include 'includes/headerAgregar.php';
?>

<body>
    <div class="container-fluid">
        <div class="row mt-1">
            <section class="form_wrap col-md-8 col-sm-8">
                <form action="save_task.php" class="form_contact" method="POST" enctype="multipart/form-data">
                    <h2>Ingresar nuevo Negocio.</h2>
                    <div class="user_info">
                        <label for="names">Nombre:</label>
                        <input type="text" name="nombrenegocio" placeholder="Nombre del negocio" required maxlength="50">

                        <label for="phone">Descripción:</label>
                        <textarea name="descripcion" placeholder="Descripción del negocio" required maxlength="170"></textarea>

                        <label for="phone">Dirección:</label>
                        <textarea name="direccion" placeholder="Dirección popular del negocio" maxlength="200"></textarea>

                        <label for="tags">Etiquetas:</label>
                        <textarea name="tags" placeholder="Etiquetas de búsqueda" maxlength="200"></textarea>

                        <label for="mensaje">Teléfono:</label>
                        <input type="text" name="telefono" placeholder="Teléfono" required maxlength="8" minlength="8"></input>
                        <div class="row">
                            <div class="col-6">
                                <select class="form-select" name="id_tipo" aria-label="Tipo" required>
                                    <option selected>Seleccione un tipo de negocio</option>
                                    <?php
                                    foreach ($Atipo as $row) {
                                        echo '<option value="' . $row['id_tipo'] . '">' . $row['nombretipo'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-select" name="id_categoria" aria-label="Categorias" required="required">
                                    <option selected>Seleccione una categoría</option>
                                    <?php
                                    foreach ($Acategorias as $row) {
                                        echo '<option value="' . $row['id_categoria'] . '">' . $row['nombrecategoria'] . '</option>';
                                    }          ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="mensaje">Logo del negocio</label required>
                                <input type="file" name="logo" class="form-control" id="logo" required></input>
                            </div>

                            <div class="col-6">
                                <label for="mensaje">Portada del negocio</label required>
                                <input type="file" name="portada" class="form-control" id="portada" required></input>
                            </div>
                        </div>

                        <label for="names">Whatsapp:</label>
                        <input type="text" name="whatsapp" maxlength="8">

                        <label for="names">Facebook:</label>
                        <input type="text" name="facebook" placeholder="Link de facebook" maxlength="200">

                        <div class="row">                
                            <div class="col-6">
                                <input type="button" class="btn btn-danger icoplace2" value="︁ Cancelar" onClick="window.location.href='./index.php'"></input>
                            </div>
                            <div class="col-6">
                                <input type="submit" name="save_task" class="btn btn-success icoplace2 btn-block" value="︁ Agregar">
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</body>
<?php
include '../includes/footer.php';
?>

</html>
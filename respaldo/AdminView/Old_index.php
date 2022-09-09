<?php
session_start();
require_once '../conexion/conexion.php';
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("SET CHARACTER SET utf8"); // <--utf8

  $sql = "SELECT * FROM negocio order by id_negocio desc";    
  $statement = $pdo->prepare($sql);
  $statement->execute(array());
  $Anegocio = $statement->fetchALL();
  $cantidadc = count($Anegocio);

} catch (PDOException $e) {
  echo "Error: ".$e->getMessage();
}
$pdo = null;

/**************************/
 include 'includes/header.php'; ?>
<main class="container p-4">
  <div class="row">
    <div class="col-md-8">
      <!-- MESSAGES -->
      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset();
      } ?>
      <!-- ADD TASK FORM -->
    </div>
    <div class="col-md-11 overflow-hidden">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Negocio</th>
            <th>Descripción</th>
            <th>Etiquetas</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
foreach($Anegocio as $row){?>
            <tr>
              <td><?php echo $row['nombrenegocio']; ?></td>
              <td><?php echo $row['descripcion']; ?></td>
              <td><?php echo $row['tags']; ?></td>
              <td><?php echo $row['direccion']; ?></td>
              <td><?php echo $row['telefono']; ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row['id_negocio'] ?>" class="btn btn-success">
                  <i class="fas fa-marker"></i>
                </a>
                <a href="agregar_galeria.php?id=<?php echo $row['id_negocio'] ?> " class="btn btn-secondary">
                <i class="fa fa-camera-retro fa-lg"></i>
                </a>
              </td>
            </tr>
          <?php
          } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
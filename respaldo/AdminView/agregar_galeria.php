<!DOCTYPE html>
<html lang="en">
<?php
require_once '../conexion/db.php';
//Consultas ala base de datos
?>
<?php if (isset($_SESSION['message'])) { ?>
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
$nombrenegocio = '';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM negocio WHERE id_negocio=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombrenegocio = $row['nombrenegocio'];
  }
}
?>
<body>
  <div class="container-fluid">
    <div class="row mt-1">
      <section class="form_wrap col-md-8 col-sm-8">
        <form action="save_galery.php" class="form_contact" method="POST" enctype="multipart/form-data">
          <h2>Ingresar nuevo Negocio.</h2>
          <div class="user_info">
            <div class="row mt-2">
              <div class="col-8">
                <label for="id">id:</label>
                <input name="id_negocio" type="text" class="form-control" value="<?php echo $id;?>" readonly>
                <label>Negocio.</label>
                <input name="nombrenegocio" type="text" class="form-control"value="<?php echo $nombrenegocio; ?>" readonly>

                <label for="mensaje">Imagen_1</label required>
                <input type="file" name="foto1" class="form-control" id="foto1" required></input>

                <label for="mensaje">Imagen_2</label required>
                <input type="file" name="foto2" class="form-control" id="foto2" required></input>

                <label for="mensaje">Imagen_3</label required>
                <input type="file" name="foto3" class="form-control" id="foto3" required></input>

                <label for="mensaje">Imagen_4</label required>
                <input type="file" name="foto4" class="form-control" id="foto4" required></input>

                <label for="mensaje">Imagen_5</label required>
                <input type="file" name="foto5" class="form-control" id="foto5" required></input>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <input type="submit" name="save_galery" class="btn btn-success icoplace2 btn-block" value="︁ Agregar">
              </div>
              <div class="col-6">
                <input type="button" class="btn btn-danger icoplace2" value="︁ Cancelar" onClick="window.location.href='./index.php'"></input>
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
<?php
require_once '../conexion/db.php';
$nombrenegocio = '';
$descripcion = '';
$direccion = '';
$categoria = '';
$telefono = '';
$whatsapp = '';
$facebook ='';
$id_categoria='';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT neg.*, cat.id_categoria, cat.nombrecategoria as categoria FROM negocio as neg 
  INNER JOIN categorias as cat ON cat.id_categoria=neg.id_categoria WHERE id_negocio=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombrenegocio = $row['nombrenegocio'];
    $descripcion = $row['descripcion'];
    $categoria = $row['categoria'];
    $direccion = $row['direccion'];
    $tags = $row['tags'];
    $telefono = $row['telefono'];
    $whatsapp =$row['whatsapp'];
    $facebook = $row['facebook'];
  }
}
if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombrenegocio = $_POST['nombrenegocio'];
  $descripcion = $_POST['descripcion'];
  $id_categoria = $row['id_categoria'];
  $direccion = $_POST['direccion'];
  $tags = $_POST['tags'];
  $telefono = $_POST['telefono'];
  $whatsapp =$_POST['whatsapp'];
  $facebook = $_POST['facebook'];

  $query = "UPDATE negocio set nombrenegocio = '$nombrenegocio',descripcion = '$descripcion', id_categoria = '$id_categoria',direccion ='$direccion', tags ='$tags',telefono='$telefono',whatsapp='$whatsapp',facebook='$facebook' WHERE id_negocio=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actalizado correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}
?>
<?php
include 'includes/header.php'; ?>
<div class="container p-2">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
        <h5>Negocio</h5>
          <input name="nombrenegocio" type="text" class="form-control" value="<?php echo $nombrenegocio; ?>" placeholder="Update nombrenegocio">
        </div>       
        <div class="form-group">
        <h5>Descripción</h5>
        <textarea name="descripcion" class="form-control" cols="10" rows="3"><?php echo $descripcion;?></textarea>
        </div>
        <div class="form-group">
        <h5>Categoría</h5>
        <select name="categoria">
            <option value="2">Veterinaria</option>
            <option value="3">Barbería</option>
            <option value="4">Bordados</option>
            <option value="5">Artesanías</option>
            <option value="6">Comida</option>
            <option value="7">Ropa</option>
            <option value="8">Variedades</option>
         </select>
        </div>
        <div class="form-group">
        <h5>Etiquetas</h5>
        <textarea name="tags" class="form-control" cols="10" rows="3"><?php echo $tags;?></textarea>
        </div>
        <h5>Dirección</h5>
        <div class="form-group">
        <textarea name="direccion" class="form-control" cols="10" rows="3"><?php echo $direccion;?></textarea>
        </div>
        <div class="form-group">
        <h5>Ingresar nuevo teléfono</h5>
        <textarea name="telefono" class="form-control" cols="10" rows="1"><?php echo $telefono;?></textarea>
        </div>
        <div class="form-group">
        <h5>WhatsApp</h5>
        <textarea name="whatsapp" class="form-control" cols="10" rows="1"><?php echo $whatsapp;?></textarea>
        </div>
        <div class="form-group">
        <h5>Facebook</h5>
        <textarea name="facebook" class="form-control" cols="10" rows="1"><?php echo $facebook;?></textarea>
        </div>
        
        <button class="btn-success" name="update">Actualizar</button>
        <button class="btn-danger"><a href="../AdminView/index.php" style="color: white;">Cancelar</a></button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>

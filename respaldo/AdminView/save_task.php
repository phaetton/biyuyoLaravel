<?php
require_once '../conexion/conexion.php';
if (isset($_POST['save_task'])) 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $nombrenegocio = $_POST['nombrenegocio'];
  $descripcion = $_POST['descripcion'];
  $tags = $_POST['tags'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $whatsapp = $_POST['whatsapp'];
  $facebook = $_POST['facebook'];
  //dropdawn
  $id_tipo = $_POST['id_tipo'];
  $id_categoria = $_POST['id_categoria'];
  //imagenes
  $logo=$_FILES["logo"]["name"];
  $ruta=$_FILES["logo"]["tmp_name"];
  $destino="fotos/negocio/".$nombrenegocio.'_1_Logo'.'.jpg';
  copy($ruta,$destino);

  $portada=$_FILES["portada"]["name"];
  $rutap=$_FILES["portada"]["tmp_name"];
  $destinop="fotos/negocio/".$nombrenegocio.'_2_portada'.'.jpg';
  copy($rutap,$destinop);


    $sql = "  INSERT INTO negocio (nombrenegocio,descripcion,tags,direccion,telefono,whatsapp,facebook,id_tipo,id_categoria,logo,portada) VALUES ('$nombrenegocio', '$descripcion', '$tags', '$direccion', '$telefono','$whatsapp','$facebook','$id_tipo', '$id_categoria', '$destino', '$destinop')";
  $conn->exec($sql);
  $_SESSION['message'] = 'Registro Agregado Exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
} catch(PDOException $e) {
  
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
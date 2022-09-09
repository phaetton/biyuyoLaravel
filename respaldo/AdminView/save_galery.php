<?php

require_once '../conexion/conexion.php';


if (isset($_POST['save_galery'])) 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $id_negocio = $_POST['id_negocio'];
  $nombrenegocio= $_POST['nombrenegocio'];
  //imagenes
  $foto1=$_FILES["foto1"]["name"];
  $ruta=$_FILES["foto1"]["tmp_name"];
  $destino1="fotos/negocio/galeria/".$nombrenegocio.'_1'.'.jpg';
  copy($ruta,$destino1);

  $foto2=$_FILES["foto2"]["name"];
  $ruta=$_FILES["foto2"]["tmp_name"];
  $destino2="fotos/negocio/galeria/".$nombrenegocio.'_2'.'.jpg';
  copy($ruta,$destino2);

  $foto3=$_FILES["foto3"]["name"];
  $ruta=$_FILES["foto3"]["tmp_name"];
  $destino3="fotos/negocio/galeria/".$nombrenegocio.'_3'.'.jpg';
  copy($ruta,$destino3);

  $foto4=$_FILES["foto4"]["name"];
  $ruta=$_FILES["foto4"]["tmp_name"];
  $destino4="fotos/negocio/galeria/".$nombrenegocio.'_4'.'.jpg';
  copy($ruta,$destino4);

  $foto5=$_FILES["foto5"]["name"];
  $ruta=$_FILES["foto5"]["tmp_name"];
  $destino5="fotos/negocio/galeria/".$nombrenegocio.'_5'.'.jpg';
  copy($ruta,$destino5);

  $query = "INSERT INTO fotos (id_fotos,id_negocio,foto1,foto2,foto3,foto4,foto5) VALUES (null,$id_negocio,'$destino1','$destino2','$destino3','$destino4','$destino5')";
  $conn->exec($query);
  // $result = mysqli_query($conn, $query);
  
  if(!$conn) {
    die("Query Failed. $conn");
  }
  $_SESSION['message'] = 'Imágenes guardadas correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}
catch(PDOException $e) {
  
  echo $query . "<br>" . $e->getMessage();
}

$conn = null;
?>

<?php
require_once '../conexion/db.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM negocio WHERE id_negocio = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Acción realizada correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}
?>

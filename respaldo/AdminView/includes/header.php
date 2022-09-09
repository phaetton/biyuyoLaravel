<!DOCTYPE html>
<html lang="en">
  <head>
  <?php  
session_start();  
  
if(!$_SESSION['user'])  
{  
  
    header("Location:../login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>
    <meta charset="UTF-8">
    <title>El Biyuyo - Admin</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <script src="./path/to/dropzone.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand">Administrador de Negocios</a>
        <li class="nav-item">
        <a href="../index.php" type="button" class="btn btn-primary">Home</a>
        <a href="../AdminView/agregar.php" type="button" class="btn btn-success">Agregar</a>
        <a href="../logout.php" type="button" class="btn btn-danger">Cerrar sesión</a>
        </li>
      </div>
    </nav>

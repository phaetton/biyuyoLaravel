<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
  }
  require 'conexion/db.php';
  ?>
  <?php
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="asset/Css/style.css">
  </head>
  <body>
  <?php require 'includes/headerlogin.php' ?>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1>Ingresa</h1>
    
    <form action="login.php" method="POST">
      <input name="user" type="text" placeholder="Ingrese su usuario">
      <input name="pass" type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="send">
    </form>
  </body>
</html>
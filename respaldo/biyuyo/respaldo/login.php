<?php  
session_start();//session starts here  
include("conexion/conn.php");    
?>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <!--CDN bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }
</style>    
<body>  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Credenciales de Administrador</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Usuario" name="user" type="text" autofocus required><br>
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" required><br>  
                            </div>  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
</html>  
<?php  


if(isset($_POST['login']))  
{  
    $user_user=$_POST['user'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from usuarios WHERE user='$user_user'AND pass='$user_pass'";  
    $run=mysqli_query($conn,$check_user);  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('AdminView/index.php','_self')</script>";  
  
        $_SESSION['user']=$user_user;//here session is used and value of $user_user store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>
                alert('Usuario o Contraseña incorrectos!')
            </script>";  
    }  
}  
?> 
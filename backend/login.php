<?php
require 'clases/conexion2.php';
require 'clases/validar.php';


$mensaje = null;
if (isset($_POST['login'])) {
    $model = new seleccionar;
    $model->user = htmlspecialchars($_POST['user']);
    $model->pass = sha1(htmlspecialchars($_POST['pass']));
    $model->login();
    $mensaje = $model->mensaje;

}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css"  href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">
    </head>
    <body>
        <center>
            <img src="../img/GestionLogo.jpg" alt="GestionAutomotriz" style="width:30%;"/>
            <h2>Iniciar Seción</h2>
            <strong><?php echo $mensaje; ?></strong>
            <div style="width:30%;">
                    <form class="form-horizontal" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                        <div class="form-group">
                           <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="Usuario">
                         </div>
                         <div class="form-group">
                           <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                         </div>
                         <input type="hidden" name="login">
                         <button type="submit" class="btn btn-default">Iniciar Sección</button>
                    </form>
            </div>
        </center>
        <script type="text/javascript" href="../../js/bootstrap.min.js"></script>
    </body>
</html>

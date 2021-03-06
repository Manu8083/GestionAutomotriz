<?php
session_start();
include 'clases/conexion2.php';
if(isset($_SESSION['user'])) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fonts/fonts/glyphicons-halflings-regular.woff">

  <script type="text/javascript" src="js/ajax.js"></script>
  <script src="js/jquery.min.js"></script>


</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Gestion Automotriz.co</a>
      </div>
      <a href="logout.php"><button class="logout">Salir</button></a>
    </nav>
    <div class="container">
      <div class="starter-template">
        <img src="img/GestionLogo.jpg" alt="GestionAutomotriz" />
        <p class="lead">Aplicación gestión de clientes</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nuevo Cliente
        </button>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Lista de Clientes</div>
        <table class="table">
          <thead>
            <tr>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Email</th>
              <th>Marca del vehiculo</th>
              <th>Modelo</th>
              <th>Año</th>
              <th>Kilometraje</th>
              <th>Telefonos</th>
              <th>Comentarios</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php
          	require("clases/conexion.php");
          	$con = Conectar();
          	$sql = "SELECT id, nombres, apellidos, email, marca_vehiculo, modelo, year, kilometraje, telefonos, comentarios FROM datos";
          	$stmt = $con->prepare($sql);
          	$result = $stmt->execute();
          	$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
          	foreach ($rows as $row) {
          ?>
			<tr>

                <td><?php print($row->nombres); ?></td>
                <td><?php print($row->apellidos); ?></td>
                <td><?php print($row->email); ?></td>
                <td><?php print($row->marca_vehiculo); ?></td>
                <td><?php print($row->modelo); ?></td>
                <td><?php print($row->year); ?></td>
                <td><?php print($row->kilometraje); ?></td>
                <td><?php print($row->telefonos); ?></td>
                <td  class="comentarios"><?php print($row->comentarios); ?></td>
                <td>
                  <div class="btn-group">
                      <a class="glyphicon glyphicon-trash btnOptions" aria-hidden="true" onclick="eliminar('<?php print($row->id); ?>')"></a>
                      <a class="glyphicon glyphicon-wrench btnOptions" aria-hidden="true" onclick="Editar('<?php print($row->id); ?>','<?php print($row->nombres); ?>','<?php print($row->apellidos); ?>','<?php print($row->email); ?>','<?php print($row->marca_vehiculo); ?>','<?php print($row->modelo); ?>','<?php print($row->year); ?>','<?php print($row->kilometraje); ?>','<?php print($row->telefonos); ?>','<?php print($row->comentarios); ?>');"></a>
                  </div>
                </td>
              </tr>

          <?php
          	}
           ?>

             </tbody>
        </table>
      </div>

      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Cliente </h4>
            </div>
            <!-- //formulario -->
            <form role="form" action="" id="FormData" name="frmClientes" onsubmit="Registrar(idP,accion); return false">
                <fieldset>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Nombre</label>
                      <input name="nombres" id="nombres" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>apellidos</label>
                      <input name="apellidos"  class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input name="email" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Marca del vehiculo</label>
                      <input name="marca_vehiculo" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Modelo</label>
                      <input name="modelo" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Año</label>
                      <input name="year" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label>Kilimetraje</label>
                      <input name="kilometraje" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Telefonos</label>
                      <input name="telefonos" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>comentarios</label>
                    <!-- <input name="comentarios" class="form-control" > -->
                    <textarea name="comentarios" rows="8" cols="40" class="form-control" maxlength="250"></textarea>
                </div>

                    <button type="submit" value="submit" class="btn btn-info btn-lg">
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Registrar
                    </button>

                  </div>
              </fieldset>
            </form>


            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i>x</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>

  </body>
  </html>
  <?php
  }else{
  	echo '<script> window.location="login.php"; </script>';
  }
  ?>

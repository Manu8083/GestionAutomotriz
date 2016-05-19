<?php
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$marca_vehiculo = $_POST['marca_vehiculo'];
	$modelo = $_POST['modelo'];
	$year = $_POST['year'];
	$kilometraje = $_POST['kilometraje'];
	$telefonos = $_POST['telefonos'];
	$idP = $_POST['idP'];

	require ('conexion.php');
	$con = Conectar();
	$sql = 'UPDATE  datos SET nombres=:nombres, apellidos=:apellidos, email=:email, marca_vehiculo=:marca_vehiculo, modelo=:modelo, year=:year, kilometraje=:kilometraje, telefonos=:telefonos WHERE id=:idPersona';
	$q = $con->prepare($sql);
	$q->execute(array(':nombres'=>$nombres, ':apellidos'=>$apellidos, ':email'=>$email, ':marca_vehiculo'=>$marca_vehiculo, ':modelo'=>$modelo, ':year'=>$year, ':kilometraje'=>$kilometraje, ':telefonos'=>$telefonos, ':idPersona'=>$idP));
?>

<?php
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$marca_vehiculo = $_POST['marca_vehiculo'];
	$modelo = $_POST['modelo'];
	$year= $_POST['year'];
	$kilometraje = $_POST['kilometraje'];
	$telefonos = $_POST['telefonos'];



	require ('conexion.php');
	$con = Conectar();
	$sql = 'INSERT INTO datos (nombres, apellidos, email, marca_vehiculo, modelo, year, kilometraje, telefonos) VALUES (:nombres, :apellidos, :email, :marca_vehiculo, :modelo, :year, :kilometraje, :telefonos)';
	$q = $con->prepare($sql);
	$q->execute(array(':nombres'=>$nombres, ':apellidos'=>$apellidos, ':email'=>$email, ':marca_vehiculo'=>$marca_vehiculo, ':modelo'=>$modelo, ':year'=>$year, ':kilometraje'=>$kilometraje, ':telefonos'=>$telefonos));

	if (isset($_POST["submit"])) {
		$nombres = trim(htmlentities(mysql_real_escape_string($_POST["nombres"])));
		$apellidos = trim(htmlentities(mysql_real_escape_string($_POST["apellidos"])));
		$email = trim(htmlentities(mysql_real_escape_string($_POST["email"])));
		$marca_vehiculo = trim(htmlentities(mysql_real_escape_string($_POST["marca_vehiculo"])));
		$modelo = trim(htmlentities(mysql_real_escape_string($_POST["modelo"])));
		$year = trim(htmlentities(mysql_real_escape_string($_POST["year"])));
		$kilometraje = trim(htmlentities(mysql_real_escape_string($_POST["kilometraje"])));
		$telefonos = trim(htmlentities(mysql_real_escape_string($_POST["telefonos"])));
		$response = array();
	}
 ?>

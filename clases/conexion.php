<?php
	function Conectar(){
		$conn = null;
		$host = 'localhost';
		$db = 'gestio1_automotriz';
		//$user = 'gestio1';
		//$pwd = 'fKTIz1pjakv3q_x';
		$user = 'root';
		$pwd = 'root';
		try {
			$conn = new  PDO('mysql:host='.$host.';dbname='.$db,$user,$pwd);
		} catch (PDOException $e) {
			echo ':( Error el conectar a la base de datos' .$e;
			exit;
		}
		return $conn;
	}
?>

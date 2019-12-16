<?php
	$banco = "mysql:dbname=pdo;host=127.0.0.1";
	$dbuser = "admin";
	$dbpass = "229536";

	try {

		$connection = new PDO($banco , $dbuser, $dbpass);
		$usuario = "Neto";
		$email = "jsn.ps4@gmail.com";
		$senha = md5("jsn229");

		$sql = "UPDATE usuario SET nome='$usuario' , email='$email' , senha='$senha' WHERE id = '1'";
		$sql = $connection->query($sql);

		echo "Alteracao feita com sucesso";
		 	
	} catch (PDOException $e) {
		 	echo "error : ".$e->getMessage();
	}	 
?>
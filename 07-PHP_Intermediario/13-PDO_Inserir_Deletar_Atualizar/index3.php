<?php
	$banco = "mysql:dbname=pdo;host=127.0.0.1";
	$dbuser = "admin";
	$dbpass = "229536";

	try {

		$connection = new PDO($banco , $dbuser, $dbpass);
		$sql = "DELETE FROM usuario WHERE id = 3";
		$connection->query($sql);

		echo "Usuario removido com sucesso";
		
	} catch (Exception $e) {
		echo "Error : ".$e->getMessage();
	}

?>
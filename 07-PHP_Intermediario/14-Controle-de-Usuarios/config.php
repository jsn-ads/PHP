<?php 
	$banco = "mysql:dbname=pdo;host:127.0.0.1";
	$dbuser= "admin";
	$dbpass= "229536";

	try {
		$connection = new PDO($banco, $dbuser, $dbpass);
		//traz o erro caso sql traz uma informação que nao existe no banco o esteja errado;
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "Error : ".$e->getMessage();
	}

?>
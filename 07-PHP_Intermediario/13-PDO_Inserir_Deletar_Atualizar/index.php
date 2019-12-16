<?php
	
	/*
		lastInsertId traz na tela o ultimo id do registro adicionado
	*/

	$banco = "mysql:dbname=pdo;host=127.0.0.1";
	$dbuser = "admin";
	$dbpassword = "229536";

	try{

		$connection = new PDO($banco, $dbuser, $dbpassword);

		$nome = "teste";
		$email = "teste";
		$senha = md5("cris229");

		$sql = "INSERT INTO usuario SET nome = '$nome', email = '$email', senha = '$senha'";
		$sql = $connection->query($sql);

		echo "Usuario Inserido : ".$connection->lastInsertId();

	}catch(PDOException $e){
		echo "Falhou : ".$e->getMessage();
	}
?>
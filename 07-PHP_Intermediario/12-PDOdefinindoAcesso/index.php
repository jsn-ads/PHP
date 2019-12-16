<?php

	$banco = "mysql:dbname=blog;host=127.0.0.1";
	$user = "admin";
	$password = "229536";

	try {

		$connection = new PDO($banco, $user, $password);
		
		$sql = "SELECT * FROM posts";
		$sql = $connection->query($sql);

		if($sql->rowCount() > 0){
			
			foreach ($sql->fetchAll() as $usuario) {
				echo "Titulo : ".$usuario["titulo"]." Corpo: ".$usuario["corpo"]." Data : ".$usuario["data_criado"]." Autor : ".$usuario["autor"]."<br>";
			}

		}else{
			echo "Não a posts Cadastrados";
		}

	} catch (PDOException $e) {
		echo "Error :".$e->getMessage();
	}

?>
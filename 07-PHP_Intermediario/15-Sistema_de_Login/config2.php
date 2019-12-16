<?php 
	$banco = "mysql:dbname=blog;host:127.0.0.1";
	$dbuser= "admin";
	$dbpass= "229536";

	try {
		$connection = new PDO($banco, $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error : ".$e->getMessage();
	}

?>
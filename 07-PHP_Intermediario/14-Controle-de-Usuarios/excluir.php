<?php 
	require 'config.php';

	if(isset($_GET['id']) && empty($_GET['id']) == false) {
		$id = addslashes($_GET['id']);
		$sql = "DELETE FROM usuario WHERE id = '$id'";
		$connection->query($sql);

		header("Location: index.php");

	}else{
		header("Location: index.php");
	}

?>
<?php

	/*
		addslashes -> protege que alguem possa usar comandos SQL nos campos de dados de um sistema. 
	*/
	
	$autor = addslashes($_POST["autor"]);

	$sql = "SELECT * FROM posts WHERE autor = '".$autor."'";

?>
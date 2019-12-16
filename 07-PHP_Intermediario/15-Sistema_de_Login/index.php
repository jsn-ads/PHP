<?php 
	
	//Inicia Sessao no Sistema
	session_start();

	if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){

		echo "Area Restrita...";

	//Caso a sessao esteja vazia e feito redirecionamento para pagina de login
		
	}else{
		header("Location: login.php");
	}

?> 
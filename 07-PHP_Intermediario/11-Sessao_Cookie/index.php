<?php 
	
	// Sessao -> salva os dados no navegador 
	// Gerar uma Sessão
	session_start();

	$_SESSION["usuario"] = "Neto";

	echo "".$_SESSION["usuario"];

	echo "<br>";


	// Cookie -> salva os dados no computador do usuario
	// parametro chave - usuario - tempo de duração do cookie
	//Gerar um cookie
	session_start();

	setcookie("usuario", "Cris", time()+3600);

	echo $_COOKIE["usuario"];


?>
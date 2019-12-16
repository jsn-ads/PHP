<?php
	
	// require usado para importa a classe 
	require 'config.php';

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "INSERT INTO usuario SET nome = '$nome', email = '$email', senha = '$senha'";
		$connection->query($sql);

		// Redireciona para pagina
		header("Location: index.php");
	}

?>

<form method="POST">
	Nome:<br>
	<input type="text" name="nome"><br>
	E-mail:<br>
	<input type="text" name="email"><br>
	Senha:<br>
	<input type="password" name="senha"><br>

	<input type="submit" value="Cadastrar">

</form>


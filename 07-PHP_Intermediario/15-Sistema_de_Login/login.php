<?php
	//inicia a sessão com banco de dados
	require 'config2.php'; 
?>

<?php  
	
	session_start();

	if(isset($_POST['email']) && empty($_POST['email']) == false){

		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

		$result = $connection->query($sql);

		if($result->rowCount() > 0){

			$user = $result->fetch();

			$_SESSION['id'] = $user['id'];

			header("Location: index.php");
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST">
		E-mail:<br>
		<input type="text" name="email" placeholder="E-mail"><br><br>

		Senha:<br>
		<input type="password" name="senha" placeholder="Senha"><br><br>

		<input type="submit" name="Entrar">

	</form>
</body>
</html>
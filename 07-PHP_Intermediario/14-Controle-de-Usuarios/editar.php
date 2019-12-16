<?php
	require 'config.php';

	$id = 0;

	if(isset($_GET['id']) && empty($_GET['id']) == false){
		
		$id = addslashes($_GET['id']);
	}

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "UPDATE usuario SET nome = '$nome', email = '$email' , senha = '$senha' WHERE id = '$id'";
		$connection->query($sql);

		header("Location: index.php");
	}

	$sql = "SELECT * FROM usuario WHERE id = '$id'";
	$resultset = $connection->query($sql);

	if($resultset->rowCount() > 0){
		$usuario = $resultset->fetch();
	}else{
		header("Location: index.php");
	}
?>

<form method="POST">
	Nome:<br>
	<input type="text" name="nome" value="<?php echo $usuario['nome']?>"><br><br>
	Email:<br>
	<input type="text" name="email" value="<?php echo $usuario['email']?>"><br><br>
	Senha:<br>
	<input type="password" name="senha" value="<?php echo $usuario['senha'] ?>"><br><br>
	<input type="submit" value="Atualizar">
</form>
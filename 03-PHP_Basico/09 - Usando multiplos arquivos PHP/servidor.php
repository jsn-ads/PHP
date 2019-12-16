<?php
	if(isset($_POST['email']) && !empty($_POST['email'])){
		if(isset($_POST['senha']) && !empty($_POST['senha'])){
			$_email = $_POST['email'];
			$_senha = $_POST['senha'];

			echo "EMAIL: ".utf8_encode($_email)." SENHA: ".utf8_encode($_senha);
		}
	}
?>
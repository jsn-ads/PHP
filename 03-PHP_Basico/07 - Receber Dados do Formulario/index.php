<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, user-scalable=0">
</head>
<body>
	<form method="POST">
		<header>
			<div class="container">
				<div class="topo">
					<h1> Formulario JSNWEBSYSTEM</h1>
				</div>
			</div>
		</header>
		<section>
			<div class="container">
				<div class="caixa">
					<div class="caixa_uni">
						<input type="text" name="login" size="18px" maxlength="10" placeholder="Usuário">
					</div>
					<div class="caixa_uni">
						<input type="password" name="senha" size="18px" maxlength="6" placeholder="Senha">
					</div>
					<div class="caixa_uni">
						<input class="botao" type="submit" name="enviar">
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="rodape">
					www.jsnwebsystem.com
				</div>
			</div>
		</footer>
	</form>
	
</body>
</html>

<?php 
	if (isset($_POST['login']) && !empty($_POST['login'])) {
		if (isset($_POST['senha']) && !empty($_POST['senha'])) {
			$usuario = $_POST['login'];
			$senha = $_POST['senha'];

			echo "Usuário: ".$usuario." Senha: ".$senha;
		}	
	}
?>
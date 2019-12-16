<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="POST">

			<div class="form-group">
				E-mail
				<input type="email" name="email" class="form-control">
			</div>

			<div class="form-group">
				Senha
				<input type="password" name="senha" class="form-control">
			</div>
			
			<input type="submit" value="Entrar" class="btn btn-default">
		</form>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Eventos de formulario</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post">
		<div class="flex">
			<input type="text" name="campo" id="campo" onfocus="focar()" onblur="desfocou()">

			<select name="cidade" onchange="mudarestado(this)">
				<option>São Paulo</option>
				<option>Rio de Janeiro</option>
				<option>Belo Horizonte</option>
				<option>Recife</option>
			</select>
			<br><br>
			<input type="submit" name="Enviar">
		</div>
	</form>
</body>
</html>
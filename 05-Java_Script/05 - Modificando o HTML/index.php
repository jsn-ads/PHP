<!DOCTYPE html>
<html>
<head>
	<title>Modificando o HTML</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="area"> Alguma coisa... </div><br><br>
	<button onclick="document.getElementById('area').innerHTML = prompt('Qual seu nome');">Modificar</button><br><br>
	<button onclick="this.innerHTML = prompt('nome do botao');">Alterar</button>
</body>
</html>
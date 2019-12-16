<!DOCTYPE html>
<html>
<head>
	<title>Eventos de Mouse</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<button onmousedown="apertar()" onmouseup="soltar()" onmouseover="passarEmCima()"
	onmouseout="saiuDeCima()" onmousemove="quandoMovimenta()">
	Eu sou um botao</button>

	<button oncontextmenu="return botaodireito()">
		Click Botao Direito
	</button>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Collapse</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		<button data-toggle="collapse" data-target="#teste">Collapse</button>
		<div id="teste" class="collapse in">
			Alguma frase qualquer...
		</div>

		<a href="#teste2" data-toggle="collapse">Botão em tag</a>
		<div id="teste2" class="collapse">
			Bootstrap
		</div>


	</div>
</body>
</html>
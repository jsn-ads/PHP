<!DOCTYPE html>
<html>
<head>
	<title>Tabs</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#home" data-toggle="tab">HOME</a>
			</li>
			<li>
				<a href="#sobre" data-toggle="tab">SOBRE</a>
			</li>			
			<li>
				<a href="#contato" data-toggle="tab">CONTATO</a>
			</li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane active in fade">
				Inicio do site
			</div>
			<div id="sobre" class="tab-pane">
				sobre nos...
			</div>
			<div id="contato" class="tab-pane">
				formulario de contato
			</div>
		</div>
	</div>
</body>
</html>
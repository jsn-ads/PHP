<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Botoes Dropdown</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		

		<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">escolha
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li class="dropdown-header">Back-End</li>
				<li><a href="#">Java</a></li>
				<li><a href="#">PHP</a></li>
				<li><a href="#">PYTHON</a></li>
				<li class="divider"></li>
				<li class="dropdown-header">Front-End</li>
				<li><a href="#">HTML</a></li>
				<li class="disabled"><a href="#">CSS</a></li>
				<li><a href="#">JAVASCRIPT</a></li>
			</ul>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Modal</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		<button class="btn btn-info" data-toggle="modal" data-target="#janela">Abrir Modal</button>
		<button class="btn btn-info" data-toggle="modal" data-target="#janela2">Abrir Modal menor</button>

		<div class="modal" role="dialog" id="janela">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Titulo do modal</h4>
					</div>
					<div class="modal-body">
						<p>Conteudo do meu modal</p>
					</div>
					<div div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>				
			</div>
		</div>

		<div class="modal" role="dialog" id="janela2">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Titulo do modal</h4>
					</div>
					<div class="modal-body">
						<p>Conteudo do meu modal</p>
					</div>
					<div div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>				
			</div>
		</div>

	</div>
</body>
</html>
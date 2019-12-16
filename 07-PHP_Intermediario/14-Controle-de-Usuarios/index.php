<?php
	require 'config.php'; 
?>

<a href="adicionar.php">Adicionar Usuario</a>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	<?php 
		$sql = "SELECT * FROM usuario";
		$resultset = $connection->query($sql);
		if($resultset->rowCount() > 0){
			foreach ($resultset->fetchAll() as $lista) {
				echo '<tr>';
					echo '<td>'.$lista['nome'].'</td>';
					echo '<td>'.$lista['email'].'</td>';
					echo '<td> <a href="editar.php?id='.$lista['id'].'">Editar</a> - 
							   <a href="excluir.php?id='.$lista['id'].'">Excluir</a></td>';
				echo '</tr>';
			}
		}
 
	 ?>
</table>
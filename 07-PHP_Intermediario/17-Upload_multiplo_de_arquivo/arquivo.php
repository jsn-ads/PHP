<pre>
<?php

	if(isset($_FILES['arquivo'])){

		$lista = $_FILES['arquivo'];

		//pega o tamano da lista de arquivos
		$x = sizeof($lista['tmp_name']);

		if($x > 0){

			for ($i=0; $i < $x ; $i++) { 

				move_uploaded_file($lista['tmp_name'][$i], 'arquivos/'.$lista['name'][$i]);
			}
		}

	}else{
		header("Location: index.php");
	}
?>
</pre>


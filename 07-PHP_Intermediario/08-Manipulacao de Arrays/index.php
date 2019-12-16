<?php 
	
	/*
		array_values -> recebe apenas valores do array
		array_keys -> recebe apenas as chaves do array
		array_pop -> remove o ultimo elemento da lista
		array_shift -> remove o primeiro elemento da lista
		asort -> ordena o array em ordem alfabetica
		arsort -> ordena o array em ordem alfabetica decresente
		count -> retorna a quantidade de registro do array
		in_array -> ele verifica se tem valor especificado no parado de um array
	*/


	$lista = array(

		"nome" => "Neto",
		"idade" => "29",
		"cidade" => "Goiânia",
		"país" => "Brasil"
	);

	$listaModificada = array_values($lista);

	print_r($listaModificada);

	echo "<br>";

	$listaModificada = array_keys($lista);

	print_r($listaModificada);

	echo "<br>";

	asort($lista);

	print_r($lista);

	echo "<br>";

	arsort($lista);

	print_r($lista);

	echo "<br>";

	array_pop($lista);

	print_r($lista);

	echo "<br>";

	array_shift($lista);

	print_r($lista);

	echo "<br>";

	echo "Quantidade de registros : ".count($listaModificada);

	echo "<br>";

	if(in_array("idade", $listaModificada)){
		echo "possui no array";
	}


?>
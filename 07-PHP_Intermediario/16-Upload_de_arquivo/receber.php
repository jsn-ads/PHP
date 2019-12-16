<?php 
	
	//para salvar arquivos com nomes altomaticos final da aula : modulo 9 aula 25.

	//recebe o arquivo exp: pdf, png , xmls , doc;
	$arquivo = $_FILES['arquivo'];

	// verifica se o arquivo esta vazio;
	if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){

		//salva o arquivo na pasta paramentros : arquivo / caminho+arquivo;
		move_uploaded_file($arquivo['tmp_name'], ''.$arquivo['name']);

		echo "arquivo registrado com sucesso";

	}else{
		echo "Não foi enviado o arquivo";
	}
?>
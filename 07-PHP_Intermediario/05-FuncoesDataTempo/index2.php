<?php 
	
	/*
		mktime -> usado para calcular o tempo entre um data x e y
		sobre mais : http://php.net/manual/pt_BR/function.mktime.php

		strtotime -> converte um tempo em string em inteiro
		sobre mais : http://php.net/manual/pt_BR/function.strtotime.php
	*/

	//pega o valor da data atual e retorna em numero inteiro
	$x = time();
	echo "Tempo atual em inteiro : ".$x;

	echo "</br>";
	echo "</br>";
	//adiciona 10 dias a mais na data atual;

	$dataEntrega = date('d/m/Y' , strtotime('+10 day'));
	echo "Tempo atual com mais 10 dias : ".$dataEntrega;

	echo "</br>";
	echo "</br>";

	// pega o valor inteiro da data e converter data padrao
	$data = date('d/m/Y' , $x);
	echo "Tempo inteiro convertido em data : ".$data;

 ?>
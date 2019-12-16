<?php

/*
	d -> dia do mes , 2 digitos com zero a esquerda ex: 01 ate 31;
	D -> retorna o dia em forma de texto
	j -> retorna o dia do mes sem o zero a esquerda ex: 01 ate 31;
	y -> retorna o ano com 4 digitos
	Y -> retorna o ano com 2 digitos 
	h -> retorna a hora e formato 12 horas
	H -> retorna a hora em formato 24 horas
	g -> mesma funcao do h sem o zero a esquera
	G -> mesma funcao do H sem o zero a esquerda
	sobre mais : http://php.net/manual/pt_BR/function.date.php
*/

date_default_timezone_set('America/Sao_Paulo');

$dataAtual = date("d/m/Y");
$dataEhora = date("d/m/Y \a\s H:i:s");

echo $dataAtual;
echo "</br>";
echo $dataEhora;


 ?>
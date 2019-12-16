<?php

/*
	explode -> separador de string , resultado e colocado em array;
	implode -> faz o processo reverso explode , juntando todo array em uma String
	number_format -> formata o numero passando como parametro o  numero de casa decimais
	str_replace -> modifica a string por outro valor no parametro
	strtoupper -> deixa toda String caixa alta
	strtolower -> deixa toda String caixa baixa
	substr -> pega um peda�o da string por parametro
	ucfisrt -> deixa a primeira letra da palavra em caixa alta
	ucwords -> deixa a primera letra de conjunto de palavras em caixa alta
*/

$nome = "Jose Alves de Souza Neto";

$x = explode(" ", $nome);

$y = explode("Alves de Souza", $nome);

print_r($x);

echo "</br>";

print_r($y);

echo "</br>";

$nomeCompleto = implode(" ", $x); 

echo $nomeCompleto;

echo "</br>";

$x = number_format(345.98763 , 2 , ",", ".");

echo $x;

echo "</br>";

$texto = "Comprei um xbox";

$x = str_replace("xbox", "ps4", $texto);

echo $x;

echo "</br>";

$x = strtoupper("jose alves de souza neto");

echo $x;

echo "</br>";

$x = strtolower("JOSE ALVES DE SOUZA NETO");

echo $x;

echo "<br>";

echo substr($x, 0, 3);

echo "<br>";

echo ucwords($x);

?> 
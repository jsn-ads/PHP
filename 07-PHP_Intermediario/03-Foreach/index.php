<?php

$nomes = array("Neto" , "Cristina" , "Rodrigo" , "Hazard");

foreach ($nomes as $aluno) {
	echo "Usuario ".$aluno."</br>";
}

echo "</br>";


$usuarios = array(
	array("nome"=> "Neto" , "idade"=> 29),
	array("nome"=> "Hazard" , "idade"=> 27),
	array("nome"=> "Willian" , "idade"=> 31),
	array("nome"=> "Kante" , "idade"=> 27)
);

foreach ($usuarios as $jogador) {
	echo "Jogador : ".$jogador["nome"]." - idade - ".$jogador["idade"]."</br>" ;
}

echo "</br>";


$jogadorP = array("nome" => "Neto",
				 "idade" => 20,
				 "nacionalidade" => "Brasil");

foreach ($jogadorP as $key => $jogadorM) {
	echo $key." - ".$jogadorM."</br>";
}

?>
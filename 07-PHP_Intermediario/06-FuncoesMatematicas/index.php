<?php 

/*
abs -> valor absoluto
round -> arredonda o numero
ceil -> sempre arredonda para cima
floot -> sempre arredonda para baixo
rand -> sempre retorna um numero aleatorio
sobre mais funçoes matematicas : http://php.net/manual/pt_BR/function.round.php
*/


echo "absoluto de : ".abs(10);

echo "</br>";

echo "absoluto de : ".abs(4.4);

echo "</br>";

echo "round : ".round(2.4);

echo "</br>";

echo "round : ".round(2.6);

echo "</br>";

echo "??? : ".rand(0 , 100);

echo "</br>";

$nomes = array("Neto" , "Cristina" , "Raissa" , "Geovanna");

$x = rand(0, 3);

echo "O sorteado(a) e : ".$nomes[$x];
 
?>
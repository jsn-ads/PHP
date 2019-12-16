<?php 

	/*
		md5 -> criptografia inrreversivel
		base64_encode -> criptografia reversivel
		base64_decode -> reverte a criptografia
	*/

	$nome = "Neto";
	$md5 = md5($nome);
	$base64 = base64_encode($nome);
	$reversivel = base64_decode($base64);

	echo "Nome original : ".$nome."<br>";
	echo "Criptografia inrreversivel : ".$md5."<br>";
	echo "Criptografia reversivel : ".$base64."<br>";
	echo "Descriptografia : ".$reversivel."<br>";


?>
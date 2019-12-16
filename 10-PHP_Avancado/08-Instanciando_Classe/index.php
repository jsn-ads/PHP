<?php 
	class Cachorro{

		public function latir(){
			echo "Au Au";
		}
	}

	$cachorro = new Cachorro();

	$cachorro->latir();

	$bettoven = new Cachorro();
	$bettoven->latir();

	//estancia a classe sem necessidade de criar um objeto e so executa apenas funções publicas mais terão que ser funçoes estaticas.
	Cachorro::latir();
?>
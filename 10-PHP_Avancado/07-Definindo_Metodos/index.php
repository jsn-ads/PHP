<?php 
	class Pessoa{
		//pode ser acessado por qualquer classe
		public function trocarSenhar($senhaAtual, $novaSenha){

		}

		//pode ser acessado apenas pela propia classe
		private function conectarBanco(){

		}

		//pode ser acessado por classe que herdarem essa classe ou a propria classe
		protected function algumaCoisa(){

		}
	}
 ?>
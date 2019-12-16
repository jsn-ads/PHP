<?php
	class Post {
		private $titulo;
		private $data;
		private $corpo;
		private $comentarios;

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($t){
			// dentro do set e possivel fazer validação antes de inserir valor dentro do objeto
			//strlen -> verifica se atributo tem mais de 5 caracteris
			//is_string -> verifica se o atributo e uma string
			if(strlen($t) > 5 && is_string($t))
			$this->titulo = $t;
		}	
	}

	$post = new Post();
	$post->setTitulo("testes");

	echo "Titulo: ".$post->getTitulo();
?>
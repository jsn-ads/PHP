<?php
    class Post{
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;
        private $qtComentarios;

        public function addComentarios($msg){
            $this->comentarios[] = $msg;
            $this->contarComentarios();
        }

        public function getQtdComentarios(){
            return $this->qtComentarios;
        }

        private function contarComentarios(){
            $this->qtComentarios = count($this->comentarios);
        }
    }

    $post = new Post();
    $post->addComentarios("Teste");
    $post->addComentarios("Teste2");
    $post->addComentarios("Teste3");
    $post->addComentarios("Teste4");

    echo "Quantidade de comentarios : ".$post->getQtdComentarios();
?>

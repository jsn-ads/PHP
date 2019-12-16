<?php

    //Apensar da classe ser abstrata ela ainda seus metodos comuns se comportam como classe normal

    abstract class Animal{

        private $tipo;

        abstract protected function andar();

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }


    }


    //toda classe de extende uma classe abstrada e obrigatorio implementar seus metodos.
    class Cavalo extends Animal{

        private $nome;

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function andar(){

        }

    }

    $animal = new Cavalo();
    $animal->setTipo("Cavalo Branco");

    echo "O animal e o tipo : ".$animal->getTipo();
?>
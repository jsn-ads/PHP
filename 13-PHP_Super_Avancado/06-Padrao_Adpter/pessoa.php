<?php
    class Pessoa {

        private $nome;
        private $idade;

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setIdade($n){
            $this->idade = $n;
        }

        public function getIdade(){
            return $this->idade;
        }
    }
?>
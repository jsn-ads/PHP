<?php
    class Animal{
        private $nome;
        private $idade;

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }
    }

    class Cavalo extends Animal{
        private $raca;
        private $altura;

        public function getRaca(){
            return $this->raca;
        }

        public function setRaca($raca){
            $this->raca = $raca;
        }

        public function getTamanho(){
            return $this->tamanho;
        }

        public function setTamanho($altura){
            $this->altura = $altura;
        }
    }

    class Gato extends Animal{
        private $raca;
        private $altura;

        public function getRaca(){
            return $this->raca;
        }

        public function setRaca($raca){
            $this->raca = $raca;
        }

        public function getTamanho(){
            return $this->tamanho;
        }

        public function setTamanho($altura){
            $this->altura = $altura;
        }
    }

    $cavalo = new Cavalo();
    $cavalo->setNome("Flash");

    echo "O nome do Cavalo e : ".$cavalo->getNome();

?>
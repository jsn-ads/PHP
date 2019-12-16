<?php

    class PessoaAdpter{
        
        private $sexo;
        private $p;

        public function __construct(Pessoa $pessoa){
            $this->p = $pessoa;
        }

        public function setSexo($n){
            $this->sexo = $n;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function getNome(){
            return $this->p->getNome();
        }

        public function getIdade(){
            return $this->p->getIdade();
        }
    }
?>
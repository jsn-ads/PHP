<?php
    class Produto extends model{

        private $produto = 'PS4';
        private $valor = '1800,00';

        public function getProduto(){
            return $this->produto;
        }

        public function setProduto($i){
            $this->produto = $i;
        }

        public function getValor(){
            return $this->valor;
        }

        public function setValor($i){
            $this->valor = $i;
        }

        //caso queria trazer base de dados ex:

        // public function tabela(){
        //     $sql "";
        //     $sql = $this->db->query($sql);

        //     if($sql->fetch() > 0){
        //         return $sql['produto'];
        //     }
        // }
    }
?>
<?php
    class Banco{
        private $c;

        public function __construct($conn){
            $this->c = $conn;
        }

        public function getNoticias(){
            $lista = array();
            $sql = "SELECT * FROM posts ORDER BY RAND()";
            $sql = $this->c->query($sql);

            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll();
            }
            return $lista;
        }
    }
?>
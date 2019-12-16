<?php
    class Posts extends model{

        //o parametro define quantidade de dados retornado
        public function getPosts($limite = 0){

            $array = array();

            $sql = "SELECT * FROM posts";

            if($limite > 0){
                $sql.= " LIMIT ".$limite;
            }

            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){

                $array = $sql->fetchAll();

            }

            return $array;
        }
    }
?>
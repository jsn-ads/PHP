<?php
    class Anuncios extends model{
        public function getQuantidade(){
            $sql = "SELECT COUNT(*) as c FROM anuncio";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $sql = $sql->fetch();
                return $sql = $sql['c'];
            }else{
                return 0;
            }
        }
    }
?>
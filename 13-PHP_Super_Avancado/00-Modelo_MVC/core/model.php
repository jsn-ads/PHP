<?php
    class model{
       protected $db;
       
       public function __construct(){
           global $conn;
           $this->db = $conn;
       }
    }
?>
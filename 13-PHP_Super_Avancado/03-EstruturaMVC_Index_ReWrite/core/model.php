<?php
    class Model{
        
        protected $db;

        public function __construct(){
            global $conn;
            $this->db = $conn;
        }
    }
?>
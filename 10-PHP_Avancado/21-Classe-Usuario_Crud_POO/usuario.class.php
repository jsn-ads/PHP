<?php

    require 'config.class.php';

    class Usuario{

        private $id;
        private $email;
        private $nome;
        private $senha;

        public function __construct($i = ''){
            
            global $connection;

            if(!empty($i)){

                $sql = "SELECT * FROM user WHERE id = ?";
                $sql = $connection->prepare($sql);
                $sql->execute(array($i));

                if($sql->rowCount() > 0){
                    $data = $sql->fetch();

                    $this->id = $data['id'];
                    $this->email = $data['email'];
                    $this->nome = $data['nome'];
                    $this->senha = $data['senha'];
                }
            }
        }

        public function getId(){
            return $this->id;
        }

        public function setEmail($e){
            $this->email = $e;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setSenha($s){
            $this->senha = md5($s);
        }

        public function salvar(){

            global $connection;

            if(!empty($this->id)){
                $sql = "UPDATE user SET email = ?, nome = ?, senha = ? WHERE id = ?";
                $sql = $connection->prepare($sql);
                $sql->execute(array($this->email, $this->nome, $this->senha, $this->id));
            }else{
                $sql = "INSERT INTO user SET email = ?, nome = ?, senha = ?";
                $sql = $connection->prepare($sql);
                $sql->execute(array($this->email, $this->nome, $this->senha));
                echo "salvo com sucesso";
            }
        }

        public function delete(){

            global $connection;

            $sql = "DELETE FROM user WHERE id = ?";
            $sql = $connection->prepare($sql);
            $sql->execute(array($this->id));
        }
    }
?>
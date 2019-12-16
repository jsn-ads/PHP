<?php

    class Contatos{

        private $connection;
        private $dbname= "mysql:dbname=crud;host=localhost";
        private $dbuser= "admin";
        private $dbpass= "229536";

        public function __construct(){
            try{
                $this->connection = new PDO($this->dbname, $this->dbuser,$this->dbpass);
            }catch(PDOException $e){
                echo "Erro : ".$e->getMessage();
            }
        }

        public function selecionar($id){
            $sql = $this->connection->prepare("SELECT * FROM contatos WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();

            $array = array();
            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }

            return $array;
        }

        public function inserir($nome, $email){
            $sql = $this->connection->prepare("INSERT INTO contatos SET nome = :nome, email = :email");
            $sql->bindParam(":nome", $nome);
            $sql->bindParam(":email",$email);
            $sql->execute();
        }

        public function atualizar($nome, $email, $id){
            $sql = $this->connection->prepare("UPDATE contatos SET nome = ? , email = ? WHERE id = ?");
            $sql->execute(array($nome, $email, $id));
        }

        public function excluir($id){

            $sql = $this->connection->prepare("DELETE FROM contatos WHERE id = ?");
            $sql->bindValue(1, $id);
            $sql->execute();
        }
    }

?>
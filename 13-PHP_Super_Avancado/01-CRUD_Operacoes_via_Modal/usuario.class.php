<?php
    class Usuario{

        private $connection;

        function __construct($conn){
            $this->connection = $conn;
        }

        function listar(){
            $lista = array();
            $sql = "SELECT * FROM usuario";
            $sql = $this->connection->query($sql);
            
            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll();
            }

            return $lista;
        }

        function adicionar($nome, $email){

            $sql = "INSERT INTO usuario SET nome = :nome , email = :email";
            $sql = $this->connection->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();   
        }

        function excluir($id){
            $sql = "DELETE FROM usuario WHERE id = :id";
            $sql = $this->connection->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();
        }

        function consultar($id){
            $sql = "SELECT * FROM usuario WHERE id = :id";
            $sql = $this->connection->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                return $sql->fetch();
            }else{
                return array();
            }
        }

        function editar($id, $nome, $email){
            $sql = "UPDATE usuario SET nome = :nome , email = :email WHERE id = :id";
            $sql = $this->connection->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':id', $id);
            $sql->execute();
        }

    }
?>
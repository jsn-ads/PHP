<?php
    class Contato{

        private $connection;

        public function __construct(){
            $this->connection = new PDO("mysql:dbname=crud;host=localhost","admin", "229536");
        }

        // adicionar contato
        public function adicionar($email , $nome = ''){
            
            if($this->existeEmail($email) == false){

                $sql = "INSERT INTO contatos SET nome = :nome, email = :email";
                $sql = $this->connection->prepare($sql);
                $sql->bindValue(':nome',$nome);
                $sql->bindValue(':email',$email);
                $sql->execute();
                return true;

            }else{
                return false;
            }
        }

        //listar contato
        public function getNome($email){
            $sql = "SELECT nome FROM contatos WHERE email = :email";
            $sql = $this->connection->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                $info = $sql->fetch();
                return $info['nome'];
            }else{
                return '';
            }
        }

        public function getContato($id){
            $sql = "SELECT * FROM contatos WHERE id = :id";
            $sql = $this->connection->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                return $sql->fetch();
            }else{
                return array();
            }
        }

        //listar todos os contatos
        public function getAllContatos(){

            $sql = "SELECT * FROM contatos";
            $sql = $this->connection->query($sql);

            if($sql ->rowCount() > 0){
                return $sql->fetchAll();
            }else{
                return array();
            }
        }

        public function editar($id,$nome,$email){

                if($this-> existeEmail($email) == false){
                    $sql = "UPDATE contatos SET nome = :nome , email = :email WHERE id = :id";
                    $sql  = $this->connection->prepare($sql);
                    $sql->bindValue(':id', $id);
                    $sql->bindValue(':nome', $nome);
                    $sql->bindValue(':email', $email);
                    $sql->execute();

                    return true;
                }else{
                    return false;
                }

        }

        public function excluir($id){
                $sql = "DELETE FROM contatos WHERE id = :id";
                $sql = $this->connection->prepare($sql);
                $sql->bindValue(':id', $id);
                $sql->execute();
        }

        //verifica se existe email
        private function existeEmail($email){
            $sql = "SELECT * FROM contatos WHERE email = :email";
            $sql = $this->connection->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }

        private function user($id){
            $sql = "SELECT * FROM contatos WHERE id = :id";
            $sql = $this->connection->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }
    }
?>
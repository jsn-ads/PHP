<?php
    $dbname = "mysql:dbname=pzp-07-18;host:127.0.0.1";
    $user = "adm";
    $pass = "229536";

    try {

        $pdo = new PDO($dbname,$user,$pass);
        $nome = 'Neto';
        $id = 5;

        $sql = "UPDATE user SET nome = :nome WHERE id = :id";
        $sql = $pdo->prepare($sql);

        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':id',$id);
        $sql->execute();


    } catch (PDOException $th) {
        echo "Falhou ".$th->getMessage(); 
    }
?>
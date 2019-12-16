<?php
    $dbname = "mysql:dbname=php25;host:127.0.0.1";
    $dbuser = "adm";
    $dbpass = "229536";

    try {
        $conn = new PDO($dbname,$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "ERRO :".$e->getMessage();
    }
?>
<?php
    //classe responsavel pela conexão com banco de dados

    require 'environment.php';

    //define a variavel como global para ter acesso em outras classes
    global $conn;

    if(ENVIRONMENT == 'development'){
        //complemeto de endereço so sistema
        define("BASE_URL", "http://localhost/JOB/PROJETOSWEB/PHP/13-PHP_Super_Avancado/14-Padrao_MVC/");
        $dbname = 'mysql:dbname=php24;host:127.0.0.1';
        $dbuser = 'adm';
        $dbpass = '229536';
    }else{
        define("BASE_URL", "endereço servidor");
        $dbname = 'mysql:dbname=php24;host:127.0.0.1';
        $dbuser = 'adm';
        $dbpass = '229536';
    }

    try {
        $conn = new PDO($dbname, $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "ERROR : ".$e->getMessage();
    }
?>
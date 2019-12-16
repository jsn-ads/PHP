<?php
    require 'environment.php';
     
    if(ENVIRONMENT == 'development'){
        define("BASE_URL", "http://localhost/JOB/PROJETOSWEB/PHP/13-PHP_Super_Avancado/03-EstruturaMVC_Index_ReWrite/");
        $dbname = "mysql:dbname=php23;host:127.0.0.1";
        $dbuser = "adm";
        $dbpass = "229536";
    }else{
        define("BASE_URL", "endereço servidor");
        $dbname = "";
        $dbuser = "";
        $dbpass = "";
    }

    global $conn;
    
    try {
        $conn = new PDO($dbname, $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "ERROR :".$e->getMessage();
    }
?>
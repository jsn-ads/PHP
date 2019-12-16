<?php

    require 'environment.php';

    if(ENVIRONMENT == 'development'){
        //define caminho projeto , e pode ser utilizado menu
        define("BASE_URL","http://localhost/JOB/PROJETOSWEB/PHP/13-PHP_Super_Avancado/00-Modelo_MVC/");
        $dbuser;
        $dbname;
        $dbpass;
    }else{
        $dbuser;
        $dbname;
        $dbpass;
    }

    global $conn;

    try {

        //$conn = new PDO($dbname, $dbuser, $dbpass);

    } catch (PDOExeception $t) {
        echo "ERROR :".$t->getMessage();
    }
?>
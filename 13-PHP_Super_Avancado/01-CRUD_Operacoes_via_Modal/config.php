<?php
    $dbname = "mysql:dbname=php22; host:127.0.0.1";
    $dbuser = "adm";
    $dbpass = "229536";
     try {
         global $conn;
         $conn = new PDO($dbname, $dbuser, $dbpass);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch (PDOException $e) {
         echo "ERROR: ".$e->getMessage();
     }
?>
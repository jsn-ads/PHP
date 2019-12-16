<?php
    $dbname ="mysql:dbname=blog;host=127.0.0.1";
    $dbuser ="adm";
    $dbpass ="229536";

    try {
        
        $connection = new PDO($dbname, $dbuser, $dbpass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessege();
    }

?>
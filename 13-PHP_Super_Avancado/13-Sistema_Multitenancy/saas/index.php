<?php
    //para iniciar esse projeto e necessario fazer alteraçoes 
    //(httpd-vhosts.config) caminho C:\xampp\apache\conf\extra
    //(Host) caminho C:\Windows\System32\drivers\etc
    //(httpd.config) C:\xampp\apache\conf
    //e fazer alteraçoes conforme a aulas 
    //(httpd-vhosts.config) https://alunos.b7web.com.br/lesson/open/109
    //(Host)https://alunos.b7web.com.br/lesson/open/17configura%C3%A7%C3%A3o%20basica%20de%20servidor...%20no%20inicio....

    require '../config.php';

    echo "Sistema Multi-tenancy";
    echo "<br><br>";

    $dominio = $_SERVER['HTTP_HOST'];

    $sql = "SELECT * FROM usuarios WHERE dominio = :dominio";
    $sql = $conn->prepare($sql);
    $sql->bindValue(':dominio', $dominio);
    $sql->execute();

    if($sql->rowCount() > 0){
        $cliente = array();
        $cliente = $sql->fetch();

        if(file_exists('clientes/'.$cliente['id'].'/index.php')){
            require 'clientes/'.$cliente['id'].'/index.php';
            exit;
        }else{
            echo "Sistema fora do ar.";
        }
    }else{
        echo "Sistema fora do ar.";
    }

?>
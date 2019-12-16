<?php
    //$p = $_POST;
    //$p['qt_login'] = strlen($_POST['login']);
    //echo json_encode($p);

    $nome = $_POST['login'];
    $senha = $_POST['senha'];
    $status = array(
        'status'=> ''
    );

    if($nome == 'Neto' && $senha == '123'){
        $status['status'] = 'ok';
    }

    echo json_encode($status);
    
?>
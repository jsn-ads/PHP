<?php
    require 'contatos.class.php';

    $contato = new Contatos();

    $res = $contato->selecionar(1);

    print_r($res);
?>
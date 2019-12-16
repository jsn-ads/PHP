<?php
    spl_autoload_register(function($c){

        require 'classes/'.$c.'.php';
        
    });

    $p = new Pessoa();
    $p->nome();
?>
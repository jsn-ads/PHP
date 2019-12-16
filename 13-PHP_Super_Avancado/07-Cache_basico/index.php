<?php
    require 'cache.php';

    $cache = new Cache();
    $cache->setVar("nome","Neto");
    $cache->setVar('idade','29');
    echo 'O meu nome e : '.$cache->getVar('nome').' e tenho '.$cache->getVar('idade').' anos de idade';
?>
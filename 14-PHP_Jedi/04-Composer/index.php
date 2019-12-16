<?php
    session_start();
    require 'vendor/autoload.php';

    $log = new Monolog\Logger("Teste");
    $log->pushHandler(new Monolog\handler\StreamHandler('erros.log', Monolog\Logger::WARNING));

    $log->addError("Aviso ! Algo errado!");
?>
<?php
    require 'ap1.php';
    require 'ap2.php';

    //quando se importa 2 classe com mesmo nome de metodos , e necessario passar o caminho para que seja instanciada a classe e isso e (Namespace)

    $sobre = new \aplicacao\v1\Sobre();

    echo "Versao do Sistema : ".$sobre->getVersao();
?>
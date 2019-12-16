<?php
    require 'pessoa.php';
    require 'pessoaAdpter.php';

    $p = new Pessoa();
    $pa = new pessoaAdpter($p);

    $p->setNome('Neto');

    $p->setIdade('20');

    $pa->setSexo('masculino');

    echo " Nome: ".$pa->getNome()."<br>";
    echo " Idade: ".$pa->getIdade()."<br>";
    echo " Sexo: ".$pa->getSexo();
    
?>
<?php
    require 'pessoa.php';

    $c = Pessoa::getInstance();
    $c->setNome("Neto");

    $s = Pessoa::getInstance();
    $s->setIdade('20');

    echo "NOME: ".$s->getNome()."<br><br>";
    echo "Idade: ".$c->getIdade();

?>

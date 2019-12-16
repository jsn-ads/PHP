<?php
    include 'contato.class.php';


    //adicionar
    $contato = new Contato();
    $contato->adicionar('jsn.ads@gmail.com', 'Neto');
    $contato->adicionar('kristina.monik@gmail.com', 'Cristina');

    //listar
    $nome = $contato->getNome('jsn.ads@gmail.com');
    
    echo "Nome : ".$nome;
    echo "<br>";

    $lista = $contato->getAllContatos();

    print_r($lista);

    //Editar
    $contato->editar('Cris', 'kristina.monik@gmail.com');

    //contato->excluir
    $excluir = $contato->excluir('kristina.monik@gmail.com');

    echo '<br>';

    if($excluir == true){
        echo 'Usuario Excluido com sucesso';
    }else{
        echo 'Usuario não foi excluido ou não existe';
    }
?>
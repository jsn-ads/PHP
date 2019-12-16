<?php 
    include 'contato.class.php';

    $contato = new Contato();
    $excluir = "excluir";

    if(!empty($_POST['nome']) && !empty($_POST['email'] && empty($_POST['id']) == true)){

        $nome = addslashes($_POST['nome']);

        $email = addslashes($_POST['email']);

        $contato->adicionar($email, $nome);

        header("Location: index.php");

    }else if(!empty($_POST['nome']) && !empty($_POST['email'] && !empty($_POST['id']))){

        $id = addslashes($_POST['id']);
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);

        $contato->editar($id, $nome, $email);

        header("Location: index.php");
    
    }else if(!empty($_GET['id']) && strcasecmp($_GET['acao'],$excluir) == 0){
        
        $id = addslashes($_GET['id']);

        $contato->excluir($id);

        header("Location: index.php");

        exit;

    }else{

        header("Location: index.php");
    }
?>
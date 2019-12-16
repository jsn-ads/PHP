<?php 
    
    require 'config.php';
    require 'usuario.class.php';

    $usuario = new Usuario($conn);

    if(!empty($_GET['id'])){
        $id = addslashes($_GET['id']);
        $usuario->excluir($id);

        header('Location: index.php');
    }
?>
<?php
    session_start();

    if (!empty($_POST['produto']) && !empty($_POST['taxa'])) {
        $produto = floatval($_POST['produto']);
        $taxa = floatval($_POST['taxa']);
        $t = $taxa * 0.01;
        $f = 1 - $t;

        $_SESSION['produtoF'] = $produto;
        $_SESSION['taxa'] = $taxa;
        $_SESSION['imposto'] = $produto * $t;
        $_SESSION['produto'] = $produto * $f;
        
        header('Location: index.php');

    } else {
        header('Location: index.php');
    }
    
?>
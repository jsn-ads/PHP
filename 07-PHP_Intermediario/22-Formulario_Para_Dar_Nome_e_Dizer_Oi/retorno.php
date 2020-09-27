<?php
    session_start();

    if (!empty($_POST['nome'])) {
        $_SESSION['vnome'] = addslashes($_POST['nome']);
        header('Location:index.php');
    } else {
        header('Location:index.php');
    }
    
?>
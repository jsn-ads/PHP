<?php
    session_start();

    if (!empty($_POST['n3'])) {
        $n3 = intval(addslashes($_POST['n3']));
        if ($_SESSION['v'] == $n3) {
            echo 'Humano';
        } else {
            echo 'FAKE';
        }
        
    } else {
        header('Location: index.php');
    }
    
?>
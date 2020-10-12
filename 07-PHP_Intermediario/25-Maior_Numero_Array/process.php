<?php

    session_start();

    if(!empty($_POST['numero'])){

        $numero = addslashes($_POST['numero']);

        $numero = preg_replace("/\s+/", "", $numero);

        $numero = explode(',',$numero);

        $qtd = count($numero);

        $maior = "";

        for ($i=0; $i < $qtd; $i++) { 
            for ($j=0; $j < $qtd; $j++) { 
                $numero[$i] <= $numero[$j];
                $maior = $numero[$j]; 
            }
        }

        $_SESSION['maior'] = $maior;

        header('Location:index.php');

    }else{

        header('Location:index.php');

    }
?>
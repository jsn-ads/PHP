<?php

    session_start();

    if(!empty($_POST['numero'])){

        $vetor = addslashes($_POST['numero']);

        $vetor = preg_replace("/\s+/", "",$vetor);

        $vetor = explode(',',$vetor);

        $t = count($vetor);

        for ($i=0 ,$j= 1; $j < $t; $i++, $j++) { 
            if($vetor[$i] == $vetor[$j]){
                $x = array_search($vetor[$j], $vetor);
                unset($vetor[$x]);
            }
        }

        $_SESSION['vetor'] = $vetor;

        header("Location:index.php");

    }else{
        header("Location:index.php");
    }
?>
<?php
    session_start();

    if(!empty($_POST['number'])){
        $texto = addslashes($_POST['number']);
        $texto = preg_replace("/\s+/", "", $texto);

        $texto = explode(',', $texto);
        $qtd = count($texto);
        $result = "";

        for ($i=0; $i < $qtd; $i++) { 
            
            if($texto[$i] == "zero"){
                $result .= 0;
            }

            if($texto[$i] == "um"){
                $result .= 1;
            }

            if($texto[$i] == "dois"){
                $result .= 2;
            }

            if($texto[$i] == "tres"){
                $result .= 3;
            }

            if($texto[$i] == "quatro"){
                $result .= 4;
            }

            if($texto[$i] == "cinco"){
                $result .= 5;
            }

            if($texto[$i] == "seis"){
                $result .= 6;
            }

            if($texto[$i] == "sete"){
                $result .= 7;
            }

            if($texto[$i] == "oito"){
                $result .= 8;
            }

            if($texto[$i] == "nove"){
                $result .= 9;
            }
        }

        $result = str_split($result,1);

        $_SESSION['result'] = $result;

        header('Location:index.php');
    }else{
        header('Location:index.php');
    }
?>
<?php
    if (!empty($_POST['n1']) && !empty($_POST['n2']) && !empty($_POST['op'])) {
        
        $n1 = floatval(addslashes($_POST['n1']));
        $n2 = floatval(addslashes($_POST['n2']));
        $op = addslashes($_POST['op']);

        switch ($op) {

            case '+':
                $result = $n1 + $n2;
                echo $n1." + ".$n2." = ".$result;
                break;
            
            case '-':
                $result = $n1 - $n2;
                echo $n1." - ".$n2." = ".$result;
                break;
                
            case '/':
                $result = $n1 / $n2;
                echo $n1." / ".$n2." = ".$result;
                break;

            case '*':
                $result = $n1 * $n2;
                echo $n1." * ".$n2." = ".$result;
                break;
        }

    } else {
        header('Location:index.php');
    }
    
?>
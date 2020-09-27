<?php
    if (!empty($_POST['nome'])) {
        
        $codigo = $_POST['nome'];

        if ($codigo == 'Neto') {
            echo 'loading.....';
            header("Location: bem_vindo.php");
        } else {
            echo "Acesso Negado";
        }
        
    }
?>

<h1>Login</h1>
<form action="" method="post">
    Digite "Neto" para logar
    <br><br>
    <input type="text" name="nome">
    <br><br>
    <input type="submit" value="Login">
</form>

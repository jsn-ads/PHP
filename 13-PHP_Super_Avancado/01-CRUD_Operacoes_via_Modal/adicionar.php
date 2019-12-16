<?php
    require 'config.php';
    include 'usuario.class.php';
    $usuario = new Usuario($conn);

    if(!empty($_POST['nome']) && !empty($_POST['email'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $usuario->adicionar($nome, $email);

        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form method="post" action="">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-outline-success" type="submit" value="Adicionar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    require 'config.php';
    include 'usuario.class.php';
    $usuario = new Usuario($conn);

    if(!empty($_GET['id'])){
        $id = addslashes($_GET['id']);
        $lista = $usuario->consultar($id);
    }

    if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['id'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $id = addcslashes($_POST['id']);
        $usuario->editar($nome, $email, $id);

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
                    <div class="form-group" id="id">
                        <input disabled="disabled" class="form-control" type="text" name="id" value="<?php echo $lista['id']?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" placeholder="Nome" value="<?php echo $lista['nome']?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $lista['email']?>">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-outline-success" type="submit" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    require 'config.php';
    require 'usuario.class.php';
    $usuario = new Usuario($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="adicionar.php" class="btn btn-outline-primary modal_ajax" id="adicionar">Adicionar</a>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>EMAIL</th>
                            <th>SENHA</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuario->listar() as $user):?>
                        <tr>
                            <td><?php echo $user['id'];    ?></td>
                            <td><?php echo $user['nome'];  ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><a href="editar.php?id=<?php echo $user['id']?>" class="modal_ajax"><img src="../assets/img/editar.png"></a></td>
                            <td><a href="excluir.php?id=<?php echo $user['id']?>"><img src="../assets/img/excluir.png"></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal_bg">
        <div class="modal2">

        </div>
    </div>
</body>
</html>
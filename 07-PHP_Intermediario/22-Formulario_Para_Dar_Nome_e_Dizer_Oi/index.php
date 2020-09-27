<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oi tudo bom ?</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <form action="retorno.php" method="post">
            <div class="squad">
                <div class="form-group">
                    <label for="my-input">Qual seu nome ?</label>
                </div>
                <div class="form-group">
                    <input id="nome" class="form-control" type="text" name="nome">
                </div>
                <div class="form-group">
                    <input id="btn" class="btn btn-outline-dark" type="submit" value="Enviar">
                </div>

                <?php
                    if(!empty($_SESSION['vnome'])){
                        $nome =  $_SESSION['vnome'];
                        echo "Ola ".$nome." , Seja bem vindo";
                        session_destroy();
                    }
                ?>

            </div>
        </form>
    </div>
</body>
</html>
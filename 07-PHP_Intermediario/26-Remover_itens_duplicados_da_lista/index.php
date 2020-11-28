<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover itens duplicados</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <form action="process.php" method="post">
            <div class="squad">
                <div class="form-group">
                    <input id="numero" class="form-control" type="text" name="numero" placeholder="Informe numeros">
                </div>
                <div class="form-group">
                    <input id="btn" class="btn btn-outline-dark" type="submit" value="Enviar">
                </div>
                <?php
                    session_start();
                    if(!empty($_SESSION['vetor'])){
                        echo 'Resultado: '.implode(",",$_SESSION['vetor']);
                        session_destroy();
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>
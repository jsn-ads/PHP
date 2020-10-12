<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de palavra em Digitot</title>
    <link rel="stylesheet"  type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <form action="process.php" method="post">
            <div class="squad">
                <div class="form-group">
                    <input id="number" class="form-control" type="text" name="number">
                </div>
                <div class="form-group">
                    <input  class="form-control" type="submit" value="Enviar">
                </div>
                <?php
                    if(!empty($_SESSION['result'])){
                        $valor = $_SESSION['result'];
                        foreach($valor as $value){
                            echo $value."<br>";
                        }
                    }
                    session_destroy();
                ?>
            </div>
        </form>
    </div>
</body>
</html>
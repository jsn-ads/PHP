<?php
    session_start();
    $n1 = rand(0,10);
    $n2 = rand(0,10);

    $_SESSION['v'] = $n1 + $n2;
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Verificador de humanos</title>
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="assets/css/style.css">
 </head>
 <body>
    <div class="container-fluid">
    <form action="verifica.php" method="post">
        <div class="squad">
            <div class="form-group">
                <strong>
                    <?php
                        echo $n1." + ".$n2." = ";
                    ?>
                </strong>
            </div>
            <div class="form-group">
                <input id="n3" class="form-control" type="text" name="n3">
            </div>
            <div class="form-group">
                <input id="enviar" class="btn btn-outline-secondary" type="submit" name="enviar">
            </div>
        </div>
    </form>
    </div>
 </body>
 </html>
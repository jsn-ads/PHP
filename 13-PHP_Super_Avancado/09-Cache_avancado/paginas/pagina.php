<?php
    require 'config.php';
    require 'banco.php';
    
    $post = new Banco($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script  type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script  type="text/javascript" src="script.js"></script>
</head>
<body>
    <div class="corpo">
        <div class="container">
            <?php
                foreach($post->getNoticias() as $item){
                $cor = rand(0,999999);
            ?>
                <div class="texto" style="background-color:#<?php echo $cor; ?>">
                    <strong><?php echo  utf8_encode($item['noticias']);?></strong>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Impostos</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <form action="calc.php" method="post">
            <div class="squad">
                <div class="form-group">
                    <label for="my-input">Valor Produto:</label>
                    <input id="produto" class="form-control" type="number" name="produto">
                </div>
                <div class="form-group">
                    <label for="my-input">Taxa de imposto(em %):</label>
                    <input id="taxa" class="form-control" type="number" name="taxa">
                </div>
                <div class="form-group">
                    <input id="btn" class="btn btn-outline-dark" type="submit"  value="Calcular">
                </div>

                <?php
                    if(!empty($_SESSION['imposto']) && !empty($_SESSION['produto'])){
                        $produtoF = $_SESSION['produtoF'];
                        $taxa = $_SESSION['taxa'];
                        $imposto = $_SESSION['imposto'];
                        $produto = $_SESSION['produto'];

                        echo 'Valor do Produto R$: '.$produtoF.'</br>Taxa de imposto: '.$taxa.'%';
                        echo '<br>Imposto R$: '.$imposto.'<br>Produto R$: '.$produto;

                        session_destroy();
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>
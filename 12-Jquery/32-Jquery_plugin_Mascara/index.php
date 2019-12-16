<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery Mascara</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <form method="post" action="" id="formulario">
            <div class="form-group">
                <input id="data" class="form-control" type="text" name="data" placeholder="Data">
            </div>
            <div class="form-group">
                <input id="cep" class="form-control" type="text" name="cep" placeholder="CEP">
            </div>
            <div class="form-group">
                <input id="tel" class="form-control" type="text" name="tel" placeholder="PHONE">
            </div>
            <div class="form-group">
                <input id="cpf" class="form-control" type="text" name="cpf" placeholder="CPF">
            </div>
            <div class="form-group">
                <input id="money" class="form-control" type="text" name="money" placeholder="R$ 0">
            </div>
            <div class="form-group">
                <input id="btn" class="btn btn-primary" type="submit" name="btn" value="Enviar">
            </div>
        </form>    
    </div>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.mask.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
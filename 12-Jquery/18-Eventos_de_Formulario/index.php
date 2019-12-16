<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="" method="post" id="form">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <label for="my-select">Idade</label>
                        <select class="custom-select" name="idade" id="#idade">
                            <option>SELECT</option>
                            <option>10 anos</option>
                            <option>20 anos</option>
                            <option>30 anos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-outline-primary" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form method="POST">
                <div id="table">
                    <div class="form-group">
                        <label for="my-input">Cache</label>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><?php echo rand(0, 9999); ?></label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-outline-success" type="submit" value="Enviar">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Bem Vindo, <?php echo $nome; ?></h1>
        <h2>você tem <?php echo $quantidade; ?></h2>
        <div class="form-group">
            <input id="my-input" class="form-control" type="text" name="">
            <input class="btn btn-outline-primary" type="submit" name="OK">
        </div>
    </div>
</body>
</html>
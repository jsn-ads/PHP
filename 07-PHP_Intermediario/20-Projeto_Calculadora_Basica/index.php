<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Basica</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid">

    <form action="calc.php" method="post">
        <div class="calculadora">
            <div class="form-group">
                <input id="n1" class="form-control" type="number" name="n1">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <select id="op" class="form-control" name="op">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input id="n2" class="form-control" type="number" name="n2">
            </div>

            <div class="form-group">
                <input  type="submit" class="btn btn-primary" value="calcular">
            </div>
        </div>
        </form>
    </div>
</body>
</html>
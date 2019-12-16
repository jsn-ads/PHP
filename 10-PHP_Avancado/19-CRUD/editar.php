<?php
    include 'contato.class.php';
    $contato = new Contato();

    if(!empty($_GET['id'])){

        $id = $_GET['id'];

        $info = $contato->getContato($id);

        if(empty($info)){
            header("Location: index.php");
            exit; 
        }
    }else{
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src=""></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table" style="width:500px;">
                    <form id="form" method="POST" action="crudContato.php">
                        <div class="form-group">
                            <label>Editar</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="id" id="id" placeholder="id" readonly="true" value="<?php echo $info['id'];?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nome" id="nome" placeholder="Nome..." value="<?php echo $info['nome'];?>"class="form-control"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="email" placeholder="E-mail..." value="<?php echo $info['email'];?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-primary" value="Salvar"/>
                            <a href="index.php" class="btn btn-outline-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
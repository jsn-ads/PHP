<?php
    include 'contato.class.php';
    $contato = new Contato();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Contatos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#adicionar">Adicionar</button>
                <div class="modal fade" id="adicionar">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form id="form" method="POST" action="crudContato.php">
                                <div class="modal-header">
                                    <div class="modal-title">Contato</div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="id" id="id" placeholder="id" readonly="true"/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome..."/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="email" id="email" placeholder="Email..."/>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                        <input type="submit"  value="Salvar" class="btn btn-outline-primary"/>
                                        <input type="submit"  value="Cancelar" class="btn btn-outline-danger" data-dismiss="modal" onclick="limpar()"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-sm table-hover table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th data-field="id">Id</th>
                                <th data-field="nome">Nome</th>
                                <th data-field="email">Email</th>
                                <th data-field="editar">Editar</th>
                                <th data-field="excluir">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $lista = $contato->getAllcontatos();
                            foreach($lista as $item): 
                        ?>
                            <tr class="secondary">
                                <td><?php echo $item['id'];?></td>
                                <td><?php echo $item['nome'];?></td>
                                <td><?php echo $item['email'];?></td>
                                <td><a href="editar.php?id=<?php echo $item['id']; ?>"><img src="../assets/img/editar.png"></a></th>
                                <td><a href="crudContato.php?acao=excluir&id=<?php echo $item['id']; ?>"><img src="../assets/img/excluir.png"></a></th>
                            </tr>
                        <?php
                            endforeach; 
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>


                
                   
                        
                            
                            
                            
    
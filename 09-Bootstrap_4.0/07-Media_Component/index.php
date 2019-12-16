<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title>Media Component</title>
    <style>
        .avatar{
            width:50px;
            height:50px;
        }

        .media{
            background-color:#EEEEEE;
            border-bottom:1px solid #CCC;
        }
    </style>
</head>
<body>
    <div class="container">

        <ul class="list-unstylied">
            <li class="media">
                <!-- 
                    posição da coluna da foto
                    align-self-center 
                    align-self-end 
                    align-self-start 
                -->
                <img src="eu.jpg" class="mr-3 avatar align-self-center" />
                <div class="media-body">
                    <h5>José Neto</h5>
                    <p>
                    O setor de tecnologia da informação (TI) ainda é bastante carente de profissionais no Brasil. 
                    Com o objetivo de qualificar novos talentos para o mercado, a Microsoft Brasil possui parceria 
                    com instituições de ensino, governos e empresas de nove estados brasileiros no programa Students 
                    to Business (S2B).
                    </p>
                </div>
            </li>
            <li class="media">
                <img src="eu.jpg" class="mr-3 avatar" />
                <div class="media-body">
                    <h5>José Neto</h5>
                    <p>
                    O setor de tecnologia da informação (TI) ainda é bastante carente de profissionais no Brasil. 
                    Com o objetivo de qualificar novos talentos para o mercado, a Microsoft Brasil possui parceria 
                    com instituições de ensino, governos e empresas de nove estados brasileiros no programa Students 
                    to Business (S2B).
                    </p>
                </div>
            </li>
            <li class="media">
                <img src="eu.jpg" class="mr-3 avatar" />
                <div class="media-body">
                    <h5>José Neto</h5>
                    <p>
                    O setor de tecnologia da informação (TI) ainda é bastante carente de profissionais no Brasil. 
                    Com o objetivo de qualificar novos talentos para o mercado, a Microsoft Brasil possui parceria 
                    com instituições de ensino, governos e empresas de nove estados brasileiros no programa Students 
                    to Business (S2B).
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <script type="text/javascript" src="../jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
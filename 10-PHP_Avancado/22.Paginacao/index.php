<?php

    require 'config.php';

    /*
        1. calcular a quantidade total de paginas
        2. definir o $p
        3. fazer uma query com LIMIT
    */ 


    // pega quantidade total de registros
    $sql = "SELECT COUNT(*) as qtd FROM posts";
    $sql = $connection->query($sql);
    $sql = $sql->fetch();

    //definde quantidade de regristos por pagina
    $total = $sql['qtd'];
    $paginas = $total /10;
    
    //posição da paginação
    $pg = 1;
    if(isset($_GET['p']) && !empty($_GET['p'])){
        $pg = addslashes($_GET['p']);
    }
    $p = ($pg - 1) * 10;

    //retorna o resultado 
    $sql = "SELECT * FROM posts LIMIT $p , 10";
    $sql = $connection->query($sql);

    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $item){
            echo $item['id'].' - '.$item['titulo'].' - '.$item['autor'].'<br/>';
        }
    }

    echo "<hr/>";
    for($i=0; $i < $paginas; $i++){
        echo '<a href="./?p='.($i+1).'">['.($i+1).']</a>';
    }
?>
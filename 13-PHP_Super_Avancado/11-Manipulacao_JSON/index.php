<?php
    //como a url nao funcionou na aula o metodo seria esse
    //$json = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/");

    $json = '{
        "carros" : [
            {"fabricante":"fiat","modelo":"palio","ano":"2013","combustivel":"gasolina"},
            {"fabricante":"volkswagen","modelo":"fusca","ano":"1986","combustivel":"gasolina"},
            {"fabricante":"renout","modelo":"prisma","ano":"2011","combustivel":"gasolina"},
            {"fabricante":"ferrari","modelo":"enzo","ano":"1998","combustivel":"gasolina"},
            {"fabricante":"hunday","modelo":"cruze","ano":"2015","combustivel":"flex"},
            {"fabricante":"chevrolet","modelo":"500","ano":"1988","combustivel":"etanol"},
            {"fabricante":"citroen","modelo":"focus","ano":"2013","combustivel":"flex"},
            {"fabricante":"ford","modelo":"ranger","ano":"2016","combustivel":"diesel"},
            {"fabricante":"jack motors","modelo":"linea","ano":"2013","combustivel":"flex"},
            {"fabricante":"subaru","modelo":"camaro","ano":"2013","combustivel":"gasolina"}
        ]
    }';

    // decoficando json
    $json = json_decode($json);

    //criando um objeto vazio , e inserindo no json
    $obj = new StdClass();
    $obj->fabricante = "forspeed";
    $obj->modelo = "Koniseg Agira";
    $obj->ano = 2019;
    $obj->combustivel = "disiel";

    $json->carros[] = $obj;

    echo "quantidade de carros: ".count($json->carros)."<br><br>";

    foreach ($json->carros as $item) {
        echo "Marcas: ".$item->fabricante." - modelo : ".$item->modelo." - ano: ".$item->ano."<br>";
    }

    echo "<br><br>";

    //codificando o arquivo em json
    echo json_encode($json);


    //criando um json do zero;

    $usuario = array(
        "Nome"=>"Jose Neto",
        "Idade"=>29,
        "Email"=>"jsn.ads@gmail.com",
        "telefone"=>"99351-8323",
        "Profissão"=>"Programador PHP"
    );

    echo "<br><br>".json_encode($usuario);
    

?>
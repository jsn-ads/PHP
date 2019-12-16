 <?php

    $xml = simplexml_load_file("arquivo.xml");

    echo "Cidade : ".$xml->nome."<br><br>";
    echo "Manha : ".$xml->manha->vento."<br>";
    echo "Tarde : ".$xml->tarde->vento."<br>";
    echo "Noite : ".$xml->noite->vento."<br><br>";

    function criarXML($arquivo, &$xml_data){

      foreach ($arquivo as $key => $value) {
          //verificar se o arquivo em um array
          if (is_array($value)) {
              //verifica se chave do array e numero , caso seja concatena com string item
              if(is_numeric($key)){
                  $key = 'item'.$key;
              }
              //caso o valor do array tenha subvalores e repetido o processo
              $subnode = $xml_data->addChild($key);
              criarXML($value , $subnode);
          }else{

              if(is_numeric($key)){
                  $key = 'item'.$key;
              }

              $xml_data->addChild($key, htmlspecialchars($value));
          }
      }
  }
    
    $array = array(
       "nome" => "Jose",
       "sobrenome" => "Neto",
       "idade" => 30,
       "sobre" => array(
          "companheiro",
          "fiel",
          "amigo"
       )
    );

    //cria um arquivo XML Vazio
    $xml_data = new SimpleXMLElement('<data/>');

    criarXML($array,$xml_data);

    $result = $xml_data->asXML();

    echo $result;


 ?>
<?php

    //Polimorfismo nada mais e que reescrever o metodo ou mudar o comportamento da classe extendida

    class Forma{

        public function area($altura, $largura){
            return $altura * $largura / 2;
        }
    }

    class Quadrado extends Forma{
        public function area($altura, $largura){
            return $altura + $largura * 2;
        }
    }

    class Retangulo extends Forma{

    }

    $quadrado = new Quadrado();
    $retangulo = new Retangulo();

    echo "quadrado : ".$quadrado->area(3,6);
    echo "<br>";
    echo "retangulo : ".$retangulo->area(3,6);

?>
<?php
    interface Pessoa{

        public function andar();  

    }

    class Funcionario implements Pessoa{
        
        public function andar(){
            echo "Estou andando...";
        }
    }

    $funcionario = new Funcionario();
    $funcionario->andar();

?>

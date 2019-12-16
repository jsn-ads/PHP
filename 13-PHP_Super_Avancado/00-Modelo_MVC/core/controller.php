<?php 
    // Classe Auxiliar das classes controllers
    class Controller{

        //funcao que carrega o menu da pagina com dados da pagina e conteudo para o template
        public function loadTemplate($viewName, $viewData){
            require 'views/template.php';
        }

        //funcao que carrega pagina recendo por paramentro o nome da Name e o ViewData carrega os dados
        public function loadViewInTemplate($viewName, $viewData){
            // transforma o array suas chaves como variaveis e com valor que estava em cada chave
            extract($viewData);
            require 'views/'.$viewName.'.php';
        }
    }
?>
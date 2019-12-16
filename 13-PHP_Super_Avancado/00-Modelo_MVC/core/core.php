<?php
    // classe reponsavel para inicializar a aplicação
    class Core{

        public function startSystem(){

            //armazena a URL
            $url = '/';

            if(isset($_GET['url'])){
                $url .= $_GET['url'];
            }

            // dividi a URL na ordem 1 = controllers / 2 = actions / 3 = parametros
            $currentController;
            $currentAction;
            $params = array();

            if(!empty($url) && $url != '/'){
                //explode serapa a string transformador num vetor 
                //array_shift remove primeira posição do vetor
                $url = explode('/',$url);
                array_shift($url);

                $currentController = $url[0].'Controller';
                array_shift($url);
                
                //verifica se possui action
                if(isset($url[0]) && !empty($url[0])){
                    $currentAction = $url[0];
                    array_shift($url);
                }else{
                    $currentAction = 'index';
                }

                //verifica se tem parametros
                if(count($url) > 0){
                    $params = $url;
                }

            }else{
                $currentController = 'homeController';
                $currentAction = 'index';
            }

            //Metodo verifica se existe controller ou metodo dentro controller
            if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)){
                $currentController = 'notFoundController';
                $currentAction = "index";
            }
            
            //instanciar o controller se serar carregado pela autoload
            $controller = new $currentController();
            //funcao utiliza carregar função que esta dentro da classe , passando classe , funcão e parametro
            call_user_func_array(array($controller, $currentAction), $params);


            // echo "Controller: ".$currentController."<br>";
            // echo "Action: ".$currentAction."<br>";
            // echo "Params: ".print_r($params, true);
        }
    }
?>
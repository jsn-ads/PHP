<?php
    class Core{

        public function start(){

            $url = '/';
            $params = array();

            //verifica se foi enviada algo na URL e concatena com URL
            if(isset($_GET['url'])){
                $url.=$_GET['url'];
            }

            if(!empty($url) && $url != '/'){

                $url = explode('/', $url);
                //remove o pirmeiro item do array
                array_shift($url);

                //seta controller na variavel e seguida remove do array
                $currentController = $url[0].'Controller';
                array_shift($url);

                //seta action na variavel e remove do array e deixa apenas o parametros
                if(isset($url[0]) && !empty($url[0])){
                    $currentAction = $url[0];
                    array_shift($url);
                }else{
                    $currentAction = 'index';
                }

                //seta os parametros para um array
                if(count($url) > 0){
                    $params = $url;
                }

            }else{
                $currentController = 'homeController';
                $currentAction = 'index';
            }

            $c = new $currentController();

            call_user_func_array(array($c, $currentAction), $params);
        }
    }
?>
<?php
    //classe responsavel em carregar a views e os models

    class homeController extends controller{

        public function __construct(){
           
        }

        public function index(){

            $dados = array();

            $posts = new Posts();
            $dados['posts'] = $posts->getPosts(10);

            $this->loadTemplate('home', $dados);
        }
    }
?>
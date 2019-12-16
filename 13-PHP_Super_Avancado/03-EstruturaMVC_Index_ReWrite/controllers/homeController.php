<?php
    class HomeController extends controller{
        
        public function index(){
            
           $anuncios = new Anuncios();
           $usuario = new Usuario();

           $dados = array(
               'quantidade' => $anuncios->getQuantidade(),
               'nome' => $usuario->getNome(),
               'idade' => $usuario->getIdade()
           );

           $quantidade = 5;

           $this->loadTemplate('home', $dados);
        }
    }
?>
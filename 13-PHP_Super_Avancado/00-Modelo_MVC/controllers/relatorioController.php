<?php
     // classe reponsavel por carregar os models e views
    class RelatorioController extends controller{
        
        //chama função loadview do controller passando o nome da view no parametro
        public function index(){

            $produto = new Produto();
            //informaçoes da pagina ex: objetos , string e numeros
            $viewData = array(
                'produto' => $produto->getProduto(),
                'valor' => $produto->getValor()
            );

            $this->loadTemplate('relatorio', $viewData);
        }
    }
?>
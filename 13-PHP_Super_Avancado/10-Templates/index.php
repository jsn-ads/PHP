<?php 
    require 'template.php';

    $array = array(
        "titulo" => "Pagina de Templates",
        "nome" => "Neto"
    );

    $template = new Template('template.phtml');
    $template->render($array);
?>
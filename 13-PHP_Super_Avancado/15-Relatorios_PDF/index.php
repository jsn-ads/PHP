<?php
    ob_start();
?>
    <h1>Relatorio em PDF</h1>
    <h4>utilizando composer no projeto</h4>
<?php   
    $html = ob_get_contents();
    ob_end_clean();

    //no terminal apos instalar composer ,digite o comando 'composer require mpdf/mpdf'

    require 'vendor/autoload.php';
    //instancia classe pdf para criar o arquivo
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    $relatorio = time().'.pdf';
    //download do pdf

    $mpdf->Output('relatorio - '.$relatorio,'I');
    // I = abrir no navengador
    // D = faz o dawnload
    // F = salvar no servidor
?>
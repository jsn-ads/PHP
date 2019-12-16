<?php
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $msg = addslashes($_POST['msg']);

        $destino = "jsn.ads@gmail.com";
        $assunto = "Pergunta do contato";
        $corpo = "Nome: ".$nome."- E-mail: ".$email."- Mensagem: ".$msg;

        //Email do servidor que esta sendo enviado o e-mail 
        $cabecalho = "From: jsn.ads@gmail.com"."\r\n"."Reply-To ".$email."\r\n"."X-Mailer: PHP/".phpversion();

        mail($destino , $assunto, $corpo, $cabecalho);

        echo "<h2>E-mail enviado com sucesso</h2>";

        //não exibi o formulario caso seja sucesso.
        exit;
    }
?>

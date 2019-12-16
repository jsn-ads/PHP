$(function(){
    $('button').on('click',function(){
       
        //requisição auxiliar em ajax
        //$('.tela').load("teste.php");

        //requisição aulixiar "POST" e "GET
        $.post("teste.php" , function(t){
            $('.tela').html(t);
        });
    });
});
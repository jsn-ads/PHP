$(function(){
    $('#formulario').on('submit', function(e){
        e.preventDefault();
        
        var dados = $(this).serialize();

        $.ajax({
            type:'POST',
            url:'ajax.php',
            data:dados,
            dataType:'json',
            success:function(json){
                //alert("Meu nome e : "+json.login+" e possui : "+json.qt_login+" caracteres");
                if(json.status == 'ok'){
                    alert("Bem vindo");
                }else{
                    alert("Usuario/Senha invalido");
                }
            }
        });
    });
});
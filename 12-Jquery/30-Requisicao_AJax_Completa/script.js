$(function(){
    $('#formulario').on('submit', function(e){
        e.preventDefault();

        var dados = $(this).serialize();
        
        $.ajax({
            type:'POST',
            url:'ajax.php',
            data:dados,
            success:function(resultado){
                $('#tela').html("Resultado: "+resultado);
            },
            error:function(){
                alert("Ocorreu um erro");
            }
        });
    });
});
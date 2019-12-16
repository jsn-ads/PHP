$(function(){
    $('#form-login').on('submit',function(e){
        //evita que formulario seja enviado sem passar Jquery
        e.preventDefault();
        var txt = $(this).serialize();
        alert(txt);
    });
});
//$(function(){
    // impedir de enviar fomulario para o servidor 
//    $('#form').on('submit', function(e){
//        e.preventDefault();
//        console.log("O formulario foi submitado");
//    });
//});

//$(function(){
    // focus em campos funciona sem bootstrap

//    $('#nome','#email').bind('focus', function(){
//        $(this).addClass('campo');
//    });

//    $('#nome','#email').bind('blur', function(){
//        $(this).removeClass('campo');
//    });
//});

$(function(){

    $("select").on('change', function(){
        alert('oi');
        console.log($(this).val());
    });

});
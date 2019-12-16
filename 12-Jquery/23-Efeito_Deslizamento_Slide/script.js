$(function(){
    $('.botao').on('click',function(){
        $('.div').slideToggle('slow');
    });

    $('.hellobar').on('click',function(){
        $(this).slideUp();
    });
});
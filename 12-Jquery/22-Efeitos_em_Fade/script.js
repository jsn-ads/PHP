$(function(){
    $('.botao').on('click',function(){
        $('.div').fadeToggle('slow');
    });

    $('.botao1').on('click',function(){
        $('.div1').fadeTo('slow',0.5);
    });
});
$(function(){
    $('.botao').on('click',function(){
        $('.div').animate({
            'margin-left':155,
            'border-radius':75
        },1000);
    });

    $('.botao1').on('click',function(){
        $('.div1').animate({
            'margin-left':155,
            'margin-top':20,
            'width':300
        },1500);
    });
});
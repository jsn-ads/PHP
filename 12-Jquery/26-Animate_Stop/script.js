$(function(){
    $('.botao1').on('click',function(){
        $('.div1').animate({
            'border-radius':75,
            'left':500
        },{
            duration:1500,
            complete:function(){
                $('.div1').animate({
                    'border-radius':0,
                    'left':8
                },1500);
            }
        });
    });

    $('.botao').on('click',function(){

        $('.div1').stop();

    });
});
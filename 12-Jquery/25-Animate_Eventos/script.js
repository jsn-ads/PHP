$(function(){
    $('.botao').on('click',function(){
       $('.div').animate({
           'border-radius':75     
       },{
           duration:1500,
           step:function(){
               console.log("processo...");
           },
           complete:function(){
               console.log("Animação finalizada")
           },
           start:function(){
               console.log("Animação Inicializada");
           }
       });
    });

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
});
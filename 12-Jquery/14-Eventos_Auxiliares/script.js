$(function(){
    $('#btn').mouseover(function(){
        $(this).addClass('fundo');
    });

    $('#btn').mouseout(function(){
        $(this).removeClass('fundo');
    });
});

// metodo mais simples 

$(function(){
    $('#btn1').hover(function(){
        $(this).addClass('fundo1');
    },function(){
        $(this).removeClass('fundo1');
    });
});

//metodo toggle

$(function(){
    $('#btn2').hover(function(){
        $(this).toggleClass('fundo2');
    });
});
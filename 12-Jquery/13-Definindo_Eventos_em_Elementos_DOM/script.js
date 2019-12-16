//evento 1 adicionado css no botao ao click
$(function(){
    $('#btn2').click(function(){
        $('#btn2').css('background-color','red');
    });
});

//evento 2 adiciona e remove o css pela classe ao click
$(function(){
    $('input').click(function(){
        if($('input').hasClass('fundo')){
            $('input').removeClass('fundo');
        }else{
            $('input').addClass('fundo');
        }
    });
});

//evento 2.1 forma resumida do evento 2

$(function(){
    $('#btn').click(function(){
        $('#btn').toggleClass('fundo2');
    });
});

//evento 3 ao passar o mouse e retirar o mouse o item

$(function(){
    $('#btn').mouseover(function(){
        $('#btn').addClass('fundo');
    });

    $('#btn').mouseout(function(){
        $('#btn').removeClass('fundo');
    });
});
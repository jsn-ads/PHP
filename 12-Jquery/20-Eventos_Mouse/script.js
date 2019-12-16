$(function(){
    //ao clicar o mouse
    $('.botao').on('mousedown',function(){
        console.log("Apertou o Mouse");
    });
    //apos clicar o mouse
    $('.botao').on('mouseup',function(){
        console.log("Soltou o Mouse");
    });

    //ao move o mouse
    
    // $('.botao').on('mousemove',function(){
    //     console.log("Moveu o Mouse");
    // });

    //ao passar o mouse por cima e remover o mouse
    $('.botao').on('mouseover',function(){
        $(this).addClass('cor');
    });

    $('.botao').on('mouseout',function(){
        $(this).removeClass('cor');
    });
    //click
    $('.botao').on('click',function(){
        console.log("Click");
    });
    //double click
    $('.botao').on('dblclick',function(){
        console.log("click duplo");
    });
});
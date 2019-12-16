$(function(){
    $('button').on('mouseover',function(){
        $(this).addClass('fundo');
        alert('Acionou o evento');
    });
});


// remove o evento
$(function(){
    $('button').off('mouseover');
});
$(function(){
    
    //hide utiliza a função display:none do css
    //$('.div').hide('slow');
    //$('.div').hide('fast');

    //show utilizado para mostrar elementos ocultos com velocidade rapida e devagar
    //$('.div').show('slow');
    //$('.div').show('fast');

    //remove e adiciona elementos
    //$('.div').toggle();

    $('.botao').on('click',function(){
        $('.div').toggle('slow');
    });
});
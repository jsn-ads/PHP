jQuery(function(){
    jQuery('h1').addClass('fundoVermelho');
    jQuery('h1').removeClass('fundoVermelho');
});

jQuery(function(){
    if (jQuery('h1').hasClass('fundoVermelho')) {
        alert('Possui a Classe');
    } else {
        alert('Não Possui a Classe');
    }
});

jQuery(function(){
    jQuery('h1').css('color','blue');
    jQuery('h1').css('font-size','50px');
});

jQuery(function(){
    jQuery('button').css('border','2px solid #000').css('background-color','red').css('color','white');
});

jQuery(function(){
    jQuery('input').addClass('texto');
    jQuery('input').css('width','350px');
});
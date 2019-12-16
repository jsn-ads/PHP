jQuery(function(){
    jQuery("#t1").find("#btn1").html("esse texto esta e <strong>Negrito</strong>");
    jQuery("#t1").find("#btn2").text("esse texto esta e <strong>Negrito</strong>");


    jQuery('#star').attr('width','50');
    //ou
    jQuery('#star').height('60');


    //jQuery('input').val('Insira seu nome');
    jQuery('input').attr('placeholder','Insira seu nome');
    //inserir elementos antes e deopis
    jQuery('input').before("<div>Digite o Nome</div>");
    jQuery('input').after("<div>Digite a idade</div>");

    //adicionar conteudo antes e depois
    jQuery('ul').prepend("<li>Item 0</li>");
    jQuery('ul').append("<li>Item 5</li>");

    //remover elemento
    jQuery('#t1').find("#btn2").remove();
});


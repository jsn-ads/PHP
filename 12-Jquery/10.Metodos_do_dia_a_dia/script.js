jQuery(function(){
    var valor = jQuery.trim(jQuery('#texto').html());
    alert(valor);

    jQuery('li').each(function(){
        alert(jQuery(this).html());
    });
});




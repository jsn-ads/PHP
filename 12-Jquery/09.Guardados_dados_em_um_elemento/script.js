jQuery(function(){
    jQuery('input').data('caracteres',jQuery('input').val().length);
    alert(jQuery('input').data('caracteres'));
});
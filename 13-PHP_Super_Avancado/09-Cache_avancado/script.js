jQuery(function(){
    var hexadecinal = '0123456789ABCDEF';
    var cor = '#';
    for(var i = 0;i < 6;i++){
        cor += hexadecinal[Math.floor(Math.random() * 16)] 
    }
    
    jQuery('body').css('background-color',cor);
});
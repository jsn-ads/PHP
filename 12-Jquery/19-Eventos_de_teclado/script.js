$(function(){
    $('#nome').on('keydown',function(e){
        if(e.keyCode == 13){
            var txt = $(this).val();
            console.log(txt);
            $(this).val('');
        }
    });

    //$('#nome').on('keyup',function(){
    //    console.log("Soltou");
    //});
});
(function($){
    $.fn.mudarCor = function(cor){

        this.each(function(){

            $(this).css('color', cor);
            $(this).css('text-decoration','none');

            $(this).hover(function(){
               $(this).css('color','#FF0000');
            },function(){
               $(this).css('color','#000000');
            });
        });

        return this;
    }
}(jQuery));
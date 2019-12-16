$(function(){
    $('.b1').on('click',function(){
        $('.div').animate({
           'margin-left':"+=50" 
        },1000);
    });

    $('.b2').on('click',function(){
        $('.div').animate({
           'margin-left':"-=50" 
        },1000);
    });
});

function eventoBTN(e){
    e.preventDefault();
    alert(e.type);
}


$(function(){
    
    $('#btn').on('click',eventoBTN);
    $('#btn').on('mouseover',eventoBTN);

    $('#btn').on('click',function(e){
        var txt = $('#nome').val();
        alert(txt);
    });
});

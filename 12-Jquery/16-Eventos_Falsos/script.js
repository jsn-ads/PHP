$(function(){
    $('#btn1').on('click',function(){
        $('#btn2').trigger('click');
    });

    $('#btn2').on('click',function(){
        alert('Clicou no botao 2')
    });
});
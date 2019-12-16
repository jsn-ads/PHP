$(function(){
    $('#data').mask('00/00/0000');
    $('#cep').mask('00000-000');
    $('#tel').mask('(00)00000-0000')
    $('#cpf').mask('000.000.000-00',{reverse:true});
    $('#money').mask('000.000.000.000,00',{reverse:true});
});

$(function(){
    $('#btn').on('click', function(){
        alert("Enviado");
    });
});
$(function(){

    $('#idade').find('option').eq(2).attr('selected', 'selected');

    var i = $('#idade').val();

    alert(i);
});
// Existem muitas bibliotecas que utilizam a mesma estrutura do jQuery e para isso existe um modo 
// para evitar esses conflitos , ao iniciar jquery.

var $j = jQuery.noConflict();

// e o jquery passa ae se utilzado assim ...

$j(document).ready(function(){
    alert("Funcionando com J");
});

// ou utilizando nativamente

jQuery(document).ready(function(){
    alert("Funcionando nativamente");
});
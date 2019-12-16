//find    -> e utilizado para seleciona o elemento e acessar o subelementos
//parent  -> selecionar o elemento superior ao elemento selecionado
//closest -> seleciona a div com nome no parametro mais esse elemento deve estar na mesma estrutura
//eq      -> seleciona posisao da mesma tag delecionada ex: ao selecionar a UL com (eq) cada LI representa uma numeração
//         <ul>
//              <li></li> <li></li> <li></li>                       
//         </ul>
//

jQuery(function(){
    jQuery('.topo').find('subtopo').find('filha');
    jQuery('.filha').parent().parent();
    jQuery('body').find('div').eq(0);
    jQuery('.filha').closest('.topo');
    jQuery('.filha').closest('.site').find('.contuedo');
});
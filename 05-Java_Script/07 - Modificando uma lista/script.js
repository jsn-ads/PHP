function adicionar(){
	var ingrediente = document.getElementById("ingrediente").value;
	var lista = document.getElementById("lista").innerHTML;
	lista = lista + "<li>"+ingrediente+"</li>";
	document.getElementById("lista").innerHTML = lista;
}
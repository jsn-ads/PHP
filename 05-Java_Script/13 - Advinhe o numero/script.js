function verificar(){
	var x = document.getElementById('n1').innerHTML;
	var y = document.getElementById('n2').value;

	if(x == y){
		alert("você acertou");
	}else{
		alert("você errou");
	}

	resetar();
}

function resetar(){
	document.getElementById('n2').value = "";

	var r = Math.floor(Math.random() * 100);
	document.getElementById('n1').innerHTML = r;
}
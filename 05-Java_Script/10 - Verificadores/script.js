function verifica() {
	x = parseInt(document.getElementById("numero").value);

	if(x < 10){
		alert("O numero e : "+x);
	} else{
		alert("o numero maior que 10 \n Digite Novamente");
	}
}
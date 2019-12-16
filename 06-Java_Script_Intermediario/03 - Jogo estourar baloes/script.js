function addBola(){
	var bola = document.createElement("div");
	bola.setAttribute("class","bola");
	var p1 = Math.floor(Math.random() * 500);
	var p2 = Math.floor(Math.random() * 500);
	bola.setAttribute("style", "left:"+p1+"px; top:"+p2+"px; background-color:"+cor());
	bola.setAttribute("onclick", "estourar(this)");

	document.body.appendChild(bola);
}

function estourar(obj){
	document.body.removeChild(obj);
}

function iniciar() {
	setInterval(addBola, 2000);
}

function cor(){
	var hexadecimais = '0123456789ABCDEF';
    var cor = '#';
 
    for (var i = 0; i < 6; i++ ) {
        cor += hexadecimais[Math.floor(Math.random() * 16)];
    }
    return cor;
}


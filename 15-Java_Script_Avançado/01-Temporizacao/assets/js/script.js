function acao(){
    document.write("Executou...<br/>");
}

// setInterval(acao, 2000); executa no start e continua a executar conforme o intervalo de tempo setado

// setTimeout(acao,2000); executa uma unica vez apos conforme de tempo setado

// clearInterval(timer); interronpe o setInterval

var timer = setInterval(acao, 2000);
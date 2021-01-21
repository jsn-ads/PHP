localStorage.removeItem("nome");

if (typeof localStorage.nome == "undefined") {
    localStorage.nome = prompt("Qual seu nome");
}

document.getElementById("info").innerHTML = localStorage.nome;
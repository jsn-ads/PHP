function Animal(){
    
    this.raca = "";
    this.nome = "";
    this.idade = 1;
    this.peso = 1;

    this.fazerBarulho = function(){
        console.log("quiquuiququqiquqiuqiqui");
    }

    this.comer = function(kg){

        for (let i = 0; i < kg; i++) {
            this.mastigar(i);            
        }

        console.log("hum...");
        this.peso = this.peso + (kg / 2); 
    }

    this.mastigar = function(i){
        console.log(i+" - Nhoc...");
    }

}

var a = new Animal();

a.nome = "Gorducha";

var b = new Animal();

b.nome = "Magrela";
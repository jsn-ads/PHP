function Animal(){
    
    this.raca = "";
    this.nome = "";
    this.idade = 1;
    this.peso = 1;

    this.fazerBarulho = function(){
        console.log("quiquuiququqiquqiuqiqui");
    }

    this.comer = function(kg){
        console.log("hum...");
        this.peso = this.peso + (kg / 2); 
    }


}

var a = new Animal();

a.nome = "Gorducha";

var b = new Animal();

b.nome = "Magrela";
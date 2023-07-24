var persona = {
  nombre: ["alvaro", "medrano"],
  edad: 32,
  genero: "masculino",
  intereses: ["mujeres", "hombres"],
  bio: function click() {
    alert(
      "Nombre " +
        this.nombre[0] +
        " Apellido " +
        this.nombre[1] +
        " Edad " +
        this.edad +
        " Genero " +
        this.genero +
        " Intereses" +
        this.intereses[0] +
        " y " +
        this.intereses[1]
    );
  },
  saludo: function () {
    alert("Hola soy " + this.nombre[0]);
  },
};
function saludos() {
  persona.bio();
  persona.saludo();
}

//Constructor

class Persona {
  constructor(nombre, apellido, edad, sexo, intereses) {
    this.name = {
      nombre: nombre,
      apellido: apellido,
    };
    this.edad = edad;
    this.sexo = sexo;
    this.intereses = intereses;
  }
  generoM() {
    if (this.sexo === "Masculino") {
      document.write(
        "Nombre " +
          this.name.nombre +
          " Apellido " +
          this.name.apellido +
          " Edad " +
          this.edad +
          " Genero " +
          this.sexo +
          " Intereses" +
          this.intereses[0] +
          " y " +
          this.intereses[1] +
          "<br>"
      );
    }
  }
  genero() {
    if (this.sexo === "femenino") {
      document.write(
        "Nombre " +
          this.name.nombre +
          " Apellido " +
          this.name.apellido +
          " Edad " +
          this.edad +
          " Genero " +
          this.sexo +
          " Intereses" +
          this.intereses[0] +
          " y " +
          this.intereses[1] +
          "<br>"
      );
    }
  }
  bio() {
    document.write(
      "Nombre " +
        this.name.nombre +
        " Apellido " +
        this.name.apellido +
        " Edad " +
        this.edad +
        " Genero " +
        this.sexo +
        " Intereses" +
        this.intereses[0] +
        " y " +
        this.intereses[1] +
        "<br>"
    );
  }
  saludo() {
    alert("Hola soy " + this.name.nombre + ".");
  }
  despedida() {
    alert(this.name.nombre + " Hasta Luego");
  }
}
//Personas
let person1 = new Persona("Juan", "Smith", 32, "Masculino", [
  "musica",
  "juegos",
]);
let person2 = new Persona("Alvaro", "Medrano0", 20, "Masculino", [
  "musica",
  "Juegos",
]);
let person3 = new Persona("Ana", "Medrano0", 20, "femenino", [
  "musica",
  "Juegos",
]);
let person4 = new Persona("Carla", "Medrano0", 20, "femenino", [
  "musica",
  "Juegos",
]);
let person5 = new Persona("Alvaro", "Medrano0", 20, "Masculino", [
  "musica",
  "Juegos",
]);
//Variables de array
let arraypersonas = [];
let arraypersonasF = [];
let arraypersonasM = [];
//Llamnadpo a array y guardandolos
arraypersonas.push(person1);
arraypersonas.push(person2);
arraypersonas.push(person3);
arraypersonas.push(person4);
arraypersonas.push(person5);

arraypersonasF.push(person1);
arraypersonasF.push(person2);
arraypersonasF.push(person3);
arraypersonasF.push(person4);
arraypersonasF.push(person5);
//Asignano valores
let lon = arraypersonas.length;
let lon1 = arraypersonasF.length;
let lon2 = arraypersonasM.length;
//Mostrando Valores
function todo() {
  for (let i = 0; i <= lon; i++) {
    arraypersonas[i].bio();
  }
}
function femenino() {
  //Separando Por generos
  for (let i = 0; i <= lon1; i++) {
    arraypersonas[i].genero();
  }
}
function masculino() {
  for (let i = 0; i <= lon1; i++) {
    arraypersonas[i].generoM();
  }
}

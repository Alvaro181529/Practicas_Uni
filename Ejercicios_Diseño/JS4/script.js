var persona = {
  nombre: ["alvaro", "medrano"],
  edad: 32,
  genero: "masculino",
  intereses: ["mujeres", "hombres"],
  bio: function () {
    alert(
      "Nombre: " +
        this.nombre[0] +
        " Apellido: " +
        this.nombre[1] +
        " Edad: " +
        this.edad +
        " Genero: " +
        this.genero +
        " Intereses: " +
        this.intereses.join(", ")
    );
  },
  saludo: function () {
    alert("Hola soy " + this.nombre[0]);
  },
};

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
  bio() {
    return (
      "Nombre: " +
      this.name.nombre +
      " Apellido: " +
      this.name.apellido +
      " Edad: " +
      this.edad +
      " Genero: " +
      this.sexo +
      " Intereses: " +
      this.intereses.join(", ") +
      "<br>"
    );
  }
}

let arraypersonas = [
  new Persona("Juan", "Smith", 32, "Masculino", ["musica", "juegos"]),
  new Persona("Alvaro", "Medrano", 20, "Masculino", ["musica", "juegos"]),
  new Persona("Ana", "Medrano", 20, "femenino", ["musica", "juegos"]),
  new Persona("Carla", "Medrano", 20, "femenino", ["musica", "juegos"]),
];

function todo() {
  let output = "";
  arraypersonas.forEach((p) => {
    output += p.bio();
  });
  document.getElementById("Leter").innerHTML = output;
}

function femenino() {
  let output = "";
  arraypersonas.forEach((p) => {
    if (p.sexo.toLowerCase() === "femenino") {
      output += p.bio();
    }
  });
  document.getElementById("Leter").innerHTML = output;
}

function masculino() {
  let output = "";
  arraypersonas.forEach((p) => {
    if (p.sexo.toLowerCase() === "masculino") {
      output += p.bio();
    }
  });
  document.getElementById("Leter").innerHTML = output;
}

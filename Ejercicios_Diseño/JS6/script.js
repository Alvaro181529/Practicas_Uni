//alvaro obligame la concha  (-_-)
class Persona {
  constructor(nombre, apellido, precio, sexo) {
    this.persona = {
      nombre,
      apellido,
    };
    this.precio = precio;
    this.sexo = sexo;
  }
  bio() {
    let per =
      "Su nombre es: " +
      this.persona.nombre +
      " " +
      " Su apellido es: " +
      this.persona.apellido +
      " " +
      " El precio es:  " +
      this.precio +
      " " +
      " Y su  Sexo es: " +
      this.sexo +
      " ";
    document.write(per);
  }
  promedio() {
    this.precio + " ";
    document.write(per);
  }
}
let Arraypersona = [];
let per1 = new Persona("Juan", "Mendez", "20", "Hombre");
let per2 = new Persona("Carlos", "Blanco", "21", "Hombre");
let per3 = new Persona("Mercedes", "Rojas", "20", "Mujer");
let per4 = new Persona("Suzuki", "Yakamura", "19", "Mujer");
let per5 = new Persona("Violeta", "Hernandez", "19", "Mujer");
Arraypersona.push(per1, per2, per3, per4, per5);

//Clase Bus
class Bus {
  constructor(ingreso, chofer, placa, modelo) {
    this.nomape = {
      ingreso,
      chofer,
    };
    this.placa = placa;
    this.modelo = modelo;
  }
  bio() {
    let cad =
      " Su ingreso es: " +
      this.nomape.ingreso +
      " " +
      " Su nombre es: " +
      this.nomape.chofer +
      " " +
      " Su placa es:  " +
      this.placa +
      " " +
      " El modelo es: " +
      this.modelo +
      " ";
    document.write(cad + "<br>");
  }
}
let bus1 = new Bus("1000", "Alvaro", "1234-TPP", "2019");
let bus2 = new Bus("950", "Oscar", "4321-HGY", "2017");
let bus3 = new Bus("1100", "Carlos", "5622-JYU", "2019");
let bus4 = new Bus("800", "Juan", "2346-KMH", "2018");
let bus5 = new Bus("1050", "Jose", "8239-MHN", "2016");

let Arraybuses = [];
Arraybuses.push(bus1, bus2, bus3, bus4, bus5);

Mostrar(Arraypersona);

let lon = Arraypersona.length;
function Mostrar(Arraypersona) {
  let lonf = Arraypersona.length;
  for (let i = 0; i < lonf; i++) {
    Arraypersona[i].bio();
  }
  document.write("<hr></br>");
}

Mostrar(Arraybuses);

let lont = Arraybuses.length;

function Mostrar(Arraybuses) {
  let lonf = Arraybuses.length;
  for (let i = 0; i < lonf; i++) {
    Arraybuses[i].bio();
  }
  document.write("</br>");
}

// for (let i = 0; i < lont; i++) {

//   let aprov = Arraybuses.filter((Bus) => Bus[i].modelo > 2018);
//   document.write(aprov);
// }
function Modelos(Arraybuses) {
  document.write("<hr>");
  for (let i = 0; i < lont; i++) {
    let num = Arraybuses[i].modelo;
    if (num <= 2018) {
      document.write(
        "Los modelos <= a 2018 son: " + Arraybuses[i].modelo + ""
      );
    }
  }
  for (let i = 0; i < lont; i++) {
    let num = Arraybuses[i].modelo;
    if (num > 2018) {
      document.write(
        "Los modelos > a 2018 son: " + Arraybuses[i].modelo + ""
      );
    }
  }
}
Modelos(Arraybuses);
function Promedio(Arraybuses) {
  document.write("<hr>");
  for (let i = 0; i < lont; i++) {
    document.write(
      "Los ingresos son: " + Arraybuses[i].nomape.ingreso + " <br>  "
    );
  }
}
Promedio(Arraybuses);

function ArrayAvg(Arraybuses) {
  let i = 0,
    summ = 0,
    ArrayLen = myArray.length;
  while (i < ArrayLen) {
    summ = summ + myArray[i++];
  }
  // document.write("resultado");

  return document.write( "");

  //return Document.write(resultado);
}
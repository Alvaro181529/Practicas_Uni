let con=2;
class Album {
  //Constructor

  constructor(Titulo, NombreArtista, Ahno, Canciones, Videos, Preio) {
    this.Titulo = Titulo;
    this.NombreArtista = NombreArtista;
    this.Ahno = Ahno;
    this.Preio = Preio;
    this.multimedia = {
      Canciones: Canciones,
      Videos: Videos,
    };
  }

  bio() {
    document.write(
      "Titulo " +
        this.Titulo +
        "<br>" +
        "Nombre Artista " +
        this.NombreArtista +
        "<br>" +
        "Año " +
        this.Ahno +
        "<br>" +
        "Canciones " +
        this.multimedia.Canciones +
        "<br>" +
        "Videos " +
        this.multimedia.Videos +
        "<br>" +
        "Precios Bs" +
        this.Preio +
        "<br>" +
        "<hr> <br>"
    );
  }
}
let album1 = new Album(
  "Hipnotize",
  "System of Down",
  2009,
  "Stealing Society",
  "Hypnotize Live",
  120
);
let album2 = new Album(
  "Californication",
  "Red Hot Chilli Peppers",
  1999,
  "Californication",
  "Californication Live",
  100
);
let album3 = new Album(
  "Finisterra",
  "Mago de Oz",
  2005,
  "Fiesta Pagana",
  "Finisterra Live",
  240
);
let album4 = new Album(
  "Hipnotize",
  "System of Down",
  2009,
  "Stealing Society",
  "Hypnotize Live",
  305
);
let album5 = new Album(
  "Hipnotize",
  "System of Down",
  2009,
  "Stealing Society",
  "Hypnotize Live",
  122
);
//Variables de array
let arrayAlbum = [];
//Llamnadpo a array y guardandolos
arrayAlbum.push(album1);
arrayAlbum.push(album2);
arrayAlbum.push(album3);
arrayAlbum.push(album4);
arrayAlbum.push(album5);

//Asignano valores
let l1on = arrayAlbum.length;

//Mostrando Valores
function todo() {
  for (let i = 0; i <= l1on; i++) {
    arrayAlbum[i].bio();
  }
}
function promedio() {
  for (let i = 0; i <= l1on; i++) {
    if (arrayAlbum[i].Preio < 150) arrayAlbum[i].bio();
  }
}
function promedioM() {
  for (let i = 0; i <= l1on; i++) {
    let cont = 0;
    if (arrayAlbum[i].Preio > 150) arrayAlbum[i].bio();
    let precio = arrayAlbum[i].Preio;
    let final =+ precio;
    document.write(final);
  }
}
// class Persona {
//     constructor(nombre, apellido, edad, sexo, interes) {
//         this.nomape = {
//             nombre,
//             apellido
//         };
//         this.edad = edad;
//         this.sexo = sexo;
//         this.interes = interes;
//     }
//     bio() {
//         let cad = this.nomape.nombre + ' ' + this.nomape.apellido + ' tiene ' + this.edad + ' años. Le gusta ' + this.interes['0'] + '  y ' + this.interes['1'];
//         document.write(cad + "<br>");
//     };
//     saludo() {
//         let cade = 'Hola yo soy : ' + this.nomape.nombre + '.'
//         alert('' + cade);
//     };
//     despedida() {
//         let de = this.nomape.nombre + ' Hasta luego!'
//         alert(de);
//     }
// };
// let persona1 = new Persona('Gabriel', 'Herrera', '21', 'Masculino', ['Musica', 'ver peliculas']);
// persona1.saludo();
// persona1.despedida();
// let persona2 = new Persona('Anna', 'Maria', '21', 'Femenino', ['Cantar', 'ver peliculas']);
// let persona3 = new Persona('Omar', 'Herrera', '19', 'Masculino', ['Musica', 'ver peliculas']);
// let persona4 = new Persona('Lisa', 'Flores', '20', 'Femenino', ['Ballet', 'ver peliculas']);
// let persona5 = new Persona('Alvaro', 'Medrano', '21', 'Masculino', ['Musica', 'ver peliculas']);

// let arrayPersonas = [];
// arrayPersonas.push(persona1);
// arrayPersonas.push(persona2);
// arrayPersonas.push(persona3);
// arrayPersonas.push(persona4);
// arrayPersonas.push(persona5);
// mostrar(arrayPersonas);

// document.write('<br>Ordenado por genero: Femenino y luego Masculino  <br><br>');
// let arrayPersonasF = [];
// let arrayPersonasM = [];
// let lon = arrayPersonas.length;
// for (let i = 0; i < lon; i++) {
//     if (arrayPersonas[i].sexo === 'Femenino') {
//         arrayPersonasF.push(arrayPersonas[i]);
//     } else {
//         arrayPersonasM.push(arrayPersonas[i]);
//     }

// }
// mostrar(arrayPersonasF);

// function mostrar(arrayPersona) {
//     let lonf = arrayPersona.length;
//     for (let i = 0; i < lonf; i++) {
//         arrayPersona[i].bio();
//     }
// }
// mostrar(arrayPersonasM);

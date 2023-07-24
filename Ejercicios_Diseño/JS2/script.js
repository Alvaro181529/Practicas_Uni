function Factorial() {
  let a = Number(document.getElementById("num1").value);
  let p = document.getElementById("res");
  let c = 1;
  let fac = 1;
  while (c <= a) {
    fac = fac * c;
    c = c + 1;
  }
  p.innerHTML = " El factorial es: " + fac;
}
function Par() {
  let a = Number(document.getElementById("num2").value);
  let p = document.getElementById("res1");
  let p1 = document.getElementById("res11");
  let c = 1;
  let b = 2;
  let d = 1;
  let e = 1;
  let fac = 1;
  let serie = "";
  let serie1 = "";
  do {
    serie = serie + "  " + b;
    while (d <= b) {
      fac = fac * d;
      d = d + 1;
    }
    serie1 = serie1 + " " + fac;
    b = b + 2;
    c = c + 1;
  } while (c <= a);
  p.innerHTML = "la serie par es " + serie;
  p1.innerHTML = "la serie par es " + serie1;
}
function Fibonacci() {
  let a = Number(document.getElementById("num3").value);
  let p = document.getElementById("res2");
  let q = document.getElementById("res3");
  let b = -1;
  let c = 1;
  let serie = " ";
  let suma = 0;
  let fibo;
  for (let i = 1; i <= a; i++) {
    fibo = b + c;
    serie = serie + " " + fibo;
    suma = suma + fibo;
    b = c;
    c = fibo;
  }
  p.innerHTML = "la serie es " + serie;
  q.innerHTML = "la suma es " + suma;
}
function Conteo(palabra) {
  let vocales = "aeiou";
  let cantidadVocales = 0;
  // let letra1=" ";
  // let long = palabra.length;
  // for (let j = 0; j < long; j++) {
  //   letra1 = letra1 + "<br>" + cad.slice(j, j + 1);
  // }
  for (let letra of palabra) {
    if (vocales.includes(letra.toLowerCase())) {
      cantidadVocales++;
      // uni = uni + "<br>" + cad.slice(palabra, palabra  + 1);
    }
  }
  document.getElementById("cadena2").innerHTML = cantidadVocales ;
  document.getElementById("cadena3").innerHTML = letra1 ;
}

function Fifa() {
  let a = Number(document.getElementById("num4").value);
  let p = document.getElementById("res4");
  let p1 = document.getElementById("res5");
  let p2 = document.getElementById("res6");
  let p3 = document.getElementById("res7");
  let b = -1;
  let c = 1;
  let d = 1;
  let serie = " ";
  let serie1 = " ";
  let suma = 0;
  let suma1 = 0;
  let fac = 1;
  let fibo;
  for (let i = 1; i <= a; i++) {
    fibo = b + c;
    while (d <= fibo) {
      fac = fac * d;
      d = d + 1;
    }
    suma1 = suma1 + fac;
    serie = serie + " " + fibo;
    serie1 = serie1 + " " + fac;
    suma = suma + fibo;
    b = c;
    c = fibo;
  }
  p.innerHTML = "la serie es " + serie;
  p1.innerHTML = "El factorial de los numeros " + serie1;
  p2.innerHTML = "la suma es " + suma;
  p3.innerHTML = "la suma es " + suma1;
}
function Sefa() {
  let a = Number(document.getElementById("num2").value);
  let p = document.getElementById("res1");
  let c = 1;
  let b = 2;
  let serie = "";
  let serie1 = "";
  do {
    serie = serie + "  " + b;
    let ff = fa(p);
    serie1 = serie1 + "  " + ff;

    b = b + 2;
    c = c + 1;
  } while (c <= a);
  p.innerHTML = "la serie par es " + serie1;
}
function Fafi() {
  let a = Number(document.getElementById("num4").value);
  let p = document.getElementById("res4");
  let p1 = document.getElementById("res5");
  let p2 = document.getElementById("res6");
  let p3 = document.getElementById("res7");
  let b = -1;
  let c = 1;
  let serie = " ";
  let suma = 0;
  let fibo;
  for (let i = 1; i <= a; i++) {
    fibo = b + c;
    let ff = fact(fibo);
    serie = serie + " " + ff;
    suma = suma + ff;
    b = c;
    c = fibo;
  }
  p.innerHTML = "la serie es " + serie;
  p2.innerHTML = "la suma es " + suma;
}
function fact(x) {
  let fac = 1;
  let d = 1;
  while (d <= x) {
    fac = fac * c;
    d = d + 1;
  }
  return fac;
}

function Mayu() {
  let c1 = document.getElementById("let").value;
  document.getElementById("cadena").innerHTML = "la cadena es " + convierte(c1);
  separa(convierte(c1));
  Conteo(convierte(c1));
}
function convierte(cad) {
  cad = cad.toLowerCase();
  let pa = cad[0];
  pa = pa.toUpperCase();
  cad = pa + cad.slice(1, cad.length);
  return cad;
}
function separa(cad) {
  let long = cad.length;
  let letra = " ";
  for (let j = 0; j < long; j++) {
    letra = letra + "<br>" + cad.slice(j, j + 1);
  }
  document.getElementById("cadena1").innerHTML = letra;
}

function conteo(palabra) {
  let vocales = "aáeéiíoóuú";
  let cantidadVocales = 0;
  for (let letra of palabra) {
    if (vocales.includes(letra.toLowerCase())) {
      cantidadVocales++;
      // uni = uni + "<br>" + cad.slice(palabra, palabra  + 1);
    }
  }
  document.getElementById("cadena2").innerHTML = +"Conteo"+ cantidadVocales 
}

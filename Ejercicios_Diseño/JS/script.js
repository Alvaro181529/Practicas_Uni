function Aritmetica() {
  let a = Number(document.getElementById("num1").value);
  let b = Number(document.getElementById("num2").value);
  let s = document.getElementById("sel").value;
  let p = document.getElementById("res");

  if (s === "sum") {
    let suma = a + b;
    p.innerHTML = " La suma es: " + suma;
  } else if (s === "rest") {
    let resta = a - b;
    p.innerHTML = "La resta es: " + resta;
  } else if (s === "mul") {
    let multiplicacion = a * b;
    p.innerHTML = "La multiplicacion es: " + multiplicacion;
  } else if (s === "div") {
    let division = a / b;
    p.innerHTML = "La division es: " + division;
  } else if (s === "mod") {
    let modulo = a % b;
    p.innerHTML = "El modulo es: " + modulo;
  }
}

function Numeros2() {
  let a = Number(document.getElementById("num3").value);
  let b = Number(document.getElementById("num4").value);
  let s = document.getElementById("sel1").value;
  let p = document.getElementById("res1");

  if (s === "mayor") {
    if (a > b) {
      p.innerHTML = "El numero mayor es: " + a;
    } else {
      p.innerHTML = "El numero mayor es: " + b;
    }
    if (a == b) {
      p.innerHTML = "Son iguales: ";
    }
  }
  if (s === "ordenar") {
    if (a > b) {
      p.innerHTML = "El orden es: " + a + " " + b;
    } else {
      p.innerHTML = "El orden es: " + b + " " + a;
    }
  }
}
function Numeros3() {
  let a = Number(document.getElementById("num5").value);
  let b = Number(document.getElementById("num6").value);
  let c = Number(document.getElementById("num7").value);
  let s = document.getElementById("sel2").value;
  let p = document.getElementById("res2");

  if (s === "mayor") {
    if ((a > b) & (a > c)) {
      p.innerHTML = "El numero mayor es: " + a;
    } else if ((b > a) & (b > c)) {
      p.innerHTML = "El numero mayor es: " + b;
    } else if ((c > a) & (c > b)) {
      p.innerHTML = "El numero mayor es: " + c;
    }
  }
  if (s === "ordenar") {
    if ((a > b) & (b > c)) {
      p.innerHTML = "El orden es: " + a + " " + b + " " + c;
    } else if ((b > a) & (a > c)) {
      p.innerHTML = "El orden es: " + b + " " + a + " " + c;
    } else if ((c > a) & (a > b)) {
      p.innerHTML = "El orden es: " + c + " " + a + " " + b;
    }
  }
}
function Numeros4() {
  let a = Number(document.getElementById("num8").value);
  let b = Number(document.getElementById("num9").value);
  let c = Number(document.getElementById("num10").value);
  let d = Number(document.getElementById("num11").value);
  let s = document.getElementById("sel3").value;
  let p = document.getElementById("res3");

  if (s === "mayor") {
    if ((a > b) & (a > c) & (a > d)) {
      p.innerHTML = "El numero mayor es: " + a;
    } else if ((b > a) & (b > c) & (b > d)) {
      p.innerHTML = "El numero mayor es: " + b;
    } else if ((c > a) & (c > b) & (c > d)) {
      p.innerHTML = "El numero mayor es: " + c;
    } else if ((d > a) & (d > b) & (d > c)) {
      p.innerHTML = "El numero mayor es: " + d;
    }
  } 
  if (s === "ordenar") {
    if ((a > b) & (b > c) & (c > d)) {
      p.innerHTML = "El orden es: " + a + " " + b + " " + c + " " + d;
    } else if ((b > a) & (a > c) & (c > d)) {
      p.innerHTML = "El orden es: " + b + " " + a + " " + c + " " + d;
    } else if ((c > a) & (a > b) & (b > d)) {
      p.innerHTML = "El orden es: " + c + " " + a + " " + b + " " + d;
    } else if ((d > a) & (a > b) & (b > c)) {
      p.innerHTML = "El orden es: " + d + " " + a + " " + b + " " + c;
    }
  }
}

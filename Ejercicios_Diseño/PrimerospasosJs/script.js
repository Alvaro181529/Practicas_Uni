function mostrar() {
  const a = document.getElementById("num").value;
  window.alert(a);
  document.getElementById("res1").innerHTML = "Se mostro" + a;
}
function mostrar2() {
  const a = document.getElementById("nombre").value;
  window.alert(a);
  document.getElementById("res2").innerHTML = "Se mostro" + a;
}
function Suma() {
  let a = Number(document.getElementById("num1").value);
  let b = Number(document.getElementById("num2").value);
  let Suma = a + b;

  document.getElementById("res").innerHTML = "la suma es :" + Suma;
}

function Multiplicacion() {
  let a = Number(document.getElementById("num1").value);
  let b = Number(document.getElementById("num2").value);
  let Mul = a * b;
  document.getElementById("res").innerHTML = "la Multiplicacion es :" + Mul;
}
function Division() {
  let a = Number(document.getElementById("num1").value);
  let b = Number(document.getElementById("num2").value);
  let Div = a / b;
  document.getElementById("res").innerHTML = "la Divicion es :" + Div;
}

function Resta() {
  let a = Number(document.getElementById("num1").value);
  let b = Number(document.getElementById("num2").value);
  let Rest = a - b;
  document.getElementById("res").innerHTML = "la Resta es :" + Rest;
}

function Modulo() {
  let a = Number(document.getElementById("num1").value);
  let b = Number(document.getElementById("num2").value);
  let Mod = a % b;
  document.getElementById("res").innerHTML = "la Modulo es :" + Mod;
}

function Mayor() {
  let a = Number(document.getElementById("con1").value);
  let b = Number(document.getElementById("con2").value);
  if (a > b) {
    document.getElementById("res0").innerHTML =
      "el valor " + a + " es mayor que " + b;
  } else {
    document.getElementById("res0").innerHTML =
      "el valor " + a + " es menor que " + b;
  }
}

function Menor() {
  let a = Number(document.getElementById("con1").value);
  let b = Number(document.getElementById("con2").value);
  if (a < b) {
    window.alert("el valor " + a + " es menor que " + b);
    document.getElementById("res0").innerHTML =
      "el valor " + a + " es menor que " + b;
  } else {
    window.alert("el valor " + a + " es mayor que " + b);
    document.getElementById("res0").innerHTML =
      "el valor " + a + " es mayor que " + b;
  }
}
function Igual() {
  let a = document.getElementById("con1").value;
  let b = document.getElementById("con2").value;
  if (a == b) {
    window.alert("el valor " + a + " es igual que " + b);
    document.getElementById("res0").innerHTML =
      "el valor " + a + " es igual que " + b;
  } else {
    window.alert("el valor " + a + " no es igual que " + b);
    document.getElementById("res0").innerHTML =
      "el valor " + a + " no es igual que " + b;
  }
}
function Diferente() {
  let a = Number(document.getElementById("con1").value);
  let b = Number(document.getElementById("con2").value);
  if (a != "") {
    window.alert("el valor " + a + " Esta asignado");
    document.getElementById("res0").innerHTML =
      "el valor " + a + " Esta asignado";
  } else {
    window.alert("esta vacio");
    document.getElementById("res0").innerHTML = "esta vacio";
  }
  if (b != "") {
    window.alert("el valor " + b + " Esta asignado");
    document.getElementById("res0").innerHTML =
      "el valor " + b + " Esta asignado";
  } else {
    window.alert("esta vacio");
    document.getElementById("res0").innerHTML = "esta vacio";
  }
}

function mayores2(x, y) {
  if (x > y) {
    return x;
  } else {
    return y;
  }
}
function Comparador() {
  let a = Number(document.getElementById("num6").value);
  let b = Number(document.getElementById("num7").value);
  let c = Number(document.getElementById("num8").value);
  if (a === b && b === c) {
    window.alert("Los valores " + a + " " + b + " " + c + " son iguales");
    document.getElementById("res6").innerHTML =
      "Los valores " + a + " " + b + " " + c + " son iguales";
  } else {
    if (mayores2(a, b) > mayores2(b, c)) {
      document.getElementById("res6").innerHTML =
        "El mayor es  " + mayores2(a, b);
    } else
      document.getElementById("res6").innerHTML =
        "El mayor es  " + mayores2(b, c);
  }
}

function Ordenar() {
  let a = Number(document.getElementById("num6").value);
  let b = Number(document.getElementById("num7").value);
  let c = Number(document.getElementById("num8").value);

  if (a > b) {
    if (a > c) {
      if (b > c) {
        document.getElementById("res6").innerHTML =
          "Los numeros ordenados son: " + c + " " + b + " " + a;
      } else {
        document.getElementById("res6").innerHTML =
          "Los numeros ordenados son: " + a + " " + c + " " + b;
      }
    } else {
      document.getElementById("res6").innerHTML =
        "Los numeros ordenados son: " + b + " " + a + " " + c;
    }
  } else {
    if (b > c) {
      if (a > c) {
        document.getElementById("res6").innerHTML =
          "Los numeros ordenados son: " + c + " " + a + " " + b;
      } else {
        document.getElementById("res6").innerHTML =
          "Los numeros ordenados son: " + a + " " + c + " " + b;
      }
    } else {
      document.getElementById("res6").innerHTML =
        "Los numeros ordenados son: " + a + " " + b + " " + c;
    }
  }
}

function Comparador2() {
  let a = Number(document.getElementById("num9").value);
  let b = Number(document.getElementById("num10").value);
  let c = Number(document.getElementById("num11").value);
  let d = Number(document.getElementById("num12").value);
  if (a === b && b === c && c === d) {
    window.alert(
      "Los valores " + a + " " + b + " " + c + " " + d + " son iguales"
    );
    document.getElementById("res11").innerHTML =
      "Los valores " + a + " " + b + " " + c + " son iguales";
  } else {
    if (mayores2(a, b) > mayores2(b, c)) {
      document.getElementById("res11").innerHTML =
        "El mayor es  " + mayores2(a, b);
    } else {
      document.getElementById("res6").innerHTML =
        "El mayor es  " + mayores2(b, c);
    }
    if (mayores2(a, b) > mayores2(c, d)) {
      document.getElementById("res6").innerHTML =
        "El mayor es  " + mayores2(c, d);
    } else {
      document.getElementById("res6").innerHTML =
        "El mayor es  " + mayores2(a, b);
    }
  }
}

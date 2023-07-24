//factorial
let array = [];
let n;
function llenar() {
  n = Number(document.getElementById("n").value);
  for (let i = 0; i < n; i++) {
    let a = prompt("Escriba un numero");
    array[i] = Number(a);
  }
  document.getElementById("res").innerHTML = array;
}
function factorial(x) {
  let f = 1;
  for (let c = 1; c <= x; c++) f = f * c;
  return f;
}
function factoarray() {
  let array2 = [];
  for (let i = 0; i < n; i++) {
    let a = factorial(array[i]);
    array2.push(a);
  }
  document.getElementById("facto").innerHTML = " " + array2;
}
//capicua por numeros
function capicua(x) {
  let numero = x;
  if (
    (((numero % 10000) - (numero % 1000)) / 1000 == numero % 10 &&
      ((numero % 1000) - (numero % 100)) / 100 ==
        ((numero % 100) - (numero % 10)) / 10) ||
    numero % 10 == (numero - (numero % 10)) / 10 ||
    numero % 10 == ((numero % 1000) - (numero % 100)) / 100
  ) {
    return "si";
  } else {
    return "no";
  }
}
function algoritmo() {
  let array3 = [];
  for (let i = 0; i < n; i++) {
    let numero = capicua(array[i]);
    array3.push(numero);
  }
  document.getElementById("cadena1").innerHTML = " " + array3;
}
String.prototype.reverse = function () {
  return this.split("").reverse().join("");
};

//Solo la funcion de Capicua
function aolocapicua() {
  let numero;
  numero = parseInt(document.formulario1.numero.value);
  if (
    (((numero % 10000) - (numero % 1000)) / 1000 == numero % 10 &&
      ((numero % 1000) - (numero % 100)) / 100 ==
        ((numero % 100) - (numero % 10)) / 10) ||
    numero % 10 == (numero - (numero % 10)) / 10 ||
    numero % 10 == ((numero % 1000) - (numero % 100)) / 100
  )
    document.getElementById("cadena").innerHTML = "S\u00ED es capicua.";
  else document.getElementById("cadena").innerHTML = "No es capicua.";
}
function testCapCua(palabra) {
  var inverseWord = palabra.reverse();
  if (palabra == inverseWord) {
    document.getElementById("cadena2").innerHTML = "si es capicua";
    return true;
  } else {
    document.getElementById("cadena2").innerHTML =
      "no es capicua: '" + inverseWord + "'";
    return false;
  }
}

  //palindromo
  let array4 = [];
  let s;
  function llenarl() {
    s = Number(document.getElementById("s").value);
    for (let i = 0; i < s; i++) {
      let a = prompt("Escriba un nombre","");
      array4[i] = String(a);
    }
    document.getElementById("res1").innerHTML = array4;
  }
  function pap(oalabra) {
    var inverseWord = oalabra.reverse();
    if (oalabra == inverseWord) {
      ;
      return "si";
    } else {
      return "no";
    }
  }
  function cap() {
    let array5 = [];
    for (let i = 0; i < s; i++) {
      let a = pap(array4[i]);
      array5.push(a);
    }
    document.getElementById("pap").innerHTML = " " + array5;
  }

//ejerecicio 3
function mostrar3(){
  var nom=prompt("Escriba tu nombre completo:","");
  nom=nom.split(" ");
  let cad='';
  for(var i=0; i<nom.length; i++){
      cad=cad+" "+nom[i]+"\n";
  }
  document.getElementById('saludo').innerHTML='Hola'+cad;
}
function mostrar4(){
  var list=document.querySelector(".output ul");
  var totalBox=document.querySelector(".output p");
  var total=0;
  list.innerHTML='';
  totalBox.textContent='';

  var productos=['medias:6.99',
  'poleras:20.99',
  'corto:14.99',
  'deportivo:51.99',
  'zapatillas:53.99'];

  for (var i=0;i<productos.length;i++){
      var subArray=productos[i].split(':');
      var name= subArray[0];
      var price=Number(subArray[1]);
      total+=price;
      itemsText=name +'$'+price;

      var listItem=document.createElement('li');
      listItem.textContent=itemsText;
      list.appendChild(listItem);
  }
  totalBox.textContent='Total: $' + total.toFixed(2);
}
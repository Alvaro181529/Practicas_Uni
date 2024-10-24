document.getElementById("sumButton").addEventListener("click", function () {
  var divLin = document.querySelectorAll(".inLin");
  var divLog = document.querySelectorAll(".inLog");
  var divVis = document.querySelectorAll(".inVis");
  var divMus = document.querySelectorAll(".inMus");
  var divKin = document.querySelectorAll(".inKin");
  var divNat = document.querySelectorAll(".inNat");
  var divIntra = document.querySelectorAll(".inIntra");
  var divInter = document.querySelectorAll(".inInter");
  let totalLin = 0;
  let totalNat = 0;
  let totalLog = 0;
  let totalVis = 0;
  let totalMus = 0;
  let totalKin = 0;
  let totalIntra = 0;
  let totalInter = 0;
  let total = 0;

  // INTELIGENCIA LINGUISTICA
  divLin.forEach((div) => {
    var select = div.querySelector("select");
    totalLin += parseFloat(select.value); // Sumar el valor del select
  });
  // INTELIGENCIA NATURALISTA
  divNat.forEach((div) => {
    var select = div.querySelector("select");
    totalNat += parseFloat(select.value); // Sumar el valor del select
  });
  // INTELIGENCIA LOGICA
  divLog.forEach((div) => {
    var select = div.querySelector("select");
    totalLog += parseFloat(select.value); // Sumar el valor del select
  });
  // INTELIGENCIA MUSICAL
  divMus.forEach((div) => {
    var select = div.querySelector("select");
    totalMus += parseFloat(select.value); // Sumar el valor del select
  });
  // INTELIGENCIA VISUAL
  divVis.forEach((div) => {
    var select = div.querySelector("select");
    totalVis += parseFloat(select.value); // Sumar el valor del select
  });
  // INTELIGENCIA KINESTICA
  divKin.forEach((div) => {
    var select = div.querySelector("select");
    totalKin += parseFloat(select.value); // Sumar el valor del select
  });
  // INTELIGENCIA INTERPERSONAL
  divInter.forEach((div) => {
    var select = div.querySelector("select");
    totalInter += parseFloat(select.value); // Sumar el valor del select
  });
  // INTELIGENCIA INTRAPERSONAL
  divIntra.forEach((div) => {
    var select = div.querySelector("select");
    totalIntra += parseFloat(select.value); // Sumar el valor del select
  });
  const totals = [
    { inteligencia: "Linguistica", value: totalLin },
    { inteligencia: "Logico Matematica", value: totalLog },
    { inteligencia: "Musical", value: totalMus },
    { inteligencia: "Visual", value: totalVis },
    { inteligencia: "Interpersonal", value: totalInter },
    { inteligencia: "Instrapersonal", value: totalIntra },
    { inteligencia: "Kinestica", value: totalKin },
    { inteligencia: "Naturalista", value: totalNat },
  ];

  total = Math.max(
    totalLin,
    totalLog,
    totalMus,
    totalVis,
    totalInter,
    totalIntra,
    totalKin,
    totalNat,
  );
  // Ordenar el array por valor en orden descendente
  totals.sort((a, b) => b.value - a.value);

  // Obtener los tres más altos
  const topThree = totals.slice(0, 3);

  // Mostrar los resultados en el modal
  function showModal() {
    const modalResults = document.getElementById("modalResults");
    modalResults.innerHTML = ""; // Limpiar resultados anteriores

    // Crear un array para los datos del gráfico
    const labels = [];
    const values = [];

    topThree.forEach((item, index) => {
      const position = index === 0 ? "1er" : index === 1 ? "2do" : "3ro";
      // modalResults.innerHTML += `La inteligencia que domina más es la ${item.inteligencia} en el ${position} lugar con el valor: ${item.value}<br>`;

      // Agregar los datos al gráfico
      labels.push(item.inteligencia);
      values.push(item.value);
    });

    // Mostrar el gráfico
    const ctx = document.getElementById("myChart").getContext("2d");
    new Chart(ctx, {
      type: "bar", // Tipo de gráfico
      data: {
        labels: labels, // Etiquetas de las barras
        datasets: [
          {
            label: "Valores de Inteligencia",
            data: values, // Datos para las barras
            backgroundColor: "rgba(75, 192, 192, 0.2)",
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });

    const modal = document.getElementById("myModal");
    modal.style.display = "block"; // Mostrar el modal
  }

  // Cerrar el modal
  function closeModal() {
    const modal = document.getElementById("myModal");
    modal.style.display = "none";
  }

  // Event listener para abrir el modal
  document
    .getElementById("showModalButton")
    .addEventListener("click", showModal);

  // Event listener para cerrar el modal
  document.querySelector(".close").addEventListener("click", closeModal);

  // Cerrar el modal al hacer clic fuera de él
  window.addEventListener("click", function (event) {
    const modal = document.getElementById("myModal");
    if (event.target === modal) {
      closeModal();
    }
  });
  showModal();
});

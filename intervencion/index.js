function switchTab(tabId) {
  const contents = document.querySelectorAll(".tab-content");
  contents.forEach((content) => content.classList.remove("active"));
  const buttons = document.querySelectorAll(".tab-button");
  buttons.forEach((button) => button.classList.remove("active"));
  document.getElementById(tabId).classList.add("active");
  const activeButton = document.querySelector(
    `.tab-button[onclick="switchTab('${tabId}')"]`,
  );
  activeButton.classList.add("active");
}
function toggleDescription(strongElement) {
  const description = strongElement.nextElementSibling; // Obtiene el <p> siguiente al <strong>

  // Alterna la visibilidad del <p>
  description.classList.toggle("hidden-description");

  // Cambia el estilo del texto de <strong> para indicar que el contenido se expandió o colapsó
  if (description.classList.contains("hidden-description")) {
    strongElement.innerHTML = strongElement.innerHTML.replace(" -", ""); // Colapsa
  } else {
    strongElement.innerHTML += " -"; // Expande
  }
}

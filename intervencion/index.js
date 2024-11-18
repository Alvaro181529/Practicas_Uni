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

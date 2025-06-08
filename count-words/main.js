const $ = ($) => document.querySelector($);
$("#words").addEventListener("input", () => {
  const text = $("#words").value.trim();
  const word = text.split(/\s+/).filter(Boolean);
  $("#word-count").textContent = word.length;
  $("#char-count").textContent = text.length;
});

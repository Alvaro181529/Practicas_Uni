const $ = ($) => document.querySelector($);
let stage, layer, imageObj;
let certificates = [];
let textNode;
let currentName = "";

$("#imageUpload").addEventListener("change", handleImageUpload);
$("#namesInput").addEventListener("input", generatePreview);
$("#fontSize").addEventListener("input", generatePreview);
$("#fontFamily").addEventListener("change", generatePreview);

function handleImageUpload(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      imageObj = new Image();
      imageObj.onload = function () {
        initializeCanvas();
        generatePreview();
      };
      imageObj.src = e.target.result;
    };
    reader.readAsDataURL(file);
  } else {
    alert("Por favor, sube una imagen.");
  }
}

function initializeCanvas() {
  stage = new Konva.Stage({
    container: "previewContainer",
    width: 600,
    height: 400,
  });

  layer = new Konva.Layer();
  stage.add(layer);
}

function generatePreview() {
  if (!imageObj) return;

  layer.destroyChildren();

  const names = $("#namesInput").value.trim().split("\n");
  const fontSize = parseInt($("#fontSize").value);
  const fontFamily = $("#fontFamily").value;

  currentName = names[0] || "Nombre de ejemplo";

  const image = new Konva.Image({
    image: imageObj,
    width: 600,
    height: 400,
  });

  textNode = new Konva.Text({
    text: currentName,
    fontSize: fontSize,
    fontFamily: fontFamily,
    fill: "black",
    draggable: true,
    x: 150,
    y: 250,
  });

  textNode.on("dragend", function () {
    layer.batchDraw();
  });

  layer.add(image);
  layer.add(textNode);
  layer.batchDraw();
}

function downloadAllCertificates() {
  const names = $("#namesInput").value.trim().split("\n");
  const fontSize = parseInt($("#fontSize").value);
  const fontFamily = $("#fontFamily").value;

  if (names.length === 0 || !imageObj) {
    alert("Por favor, asegúrate de subir una imagen y de ingresar nombres.");
    return;
  }

  const { jsPDF } = window.jspdf;
  const pdf = new jsPDF("landscape", "mm", "a4");

  const pageWidth = 297;
  const pageHeight = 210;

  const imgWidth = Math.min(imageObj.width, pageWidth);
  const imgHeight = (imageObj.height * imgWidth) / imageObj.width;

  const x = (pageWidth - imgWidth) / 2;
  const y = (pageHeight - imgHeight) / 2;

  names.forEach((name, index) => {
    textNode.text(name);
    textNode.fontSize(fontSize);
    textNode.fontFamily(fontFamily);

    layer.batchDraw();

    const canvas = layer.toCanvas();
    const imgData = canvas.toDataURL("image/png");

    if (index > 0) pdf.addPage();
    pdf.addImage(imgData, "PNG", x, y, imgWidth, imgHeight);
  });

  pdf.save("certificados.pdf");
}

function downloadAllCertificatesAsZip() {
  const names = $("#namesInput").value.trim().split("\n");
  const fontSize = parseInt($("#fontSize").value);
  const fontFamily = $("#fontFamily").value;

  if (names.length === 0 || !imageObj) {
    alert("Por favor, asegúrate de subir una imagen y de ingresar nombres.");
    return;
  }

  const zip = new JSZip();

  const pageWidth = 297;
  const pageHeight = 210;

  const imgWidth = Math.min(imageObj.width, pageWidth);
  const imgHeight = (imageObj.height * imgWidth) / imageObj.width;

  const x = (pageWidth - imgWidth) / 2;
  const y = (pageHeight - imgHeight) / 2;

  names.forEach((name, index) => {
    textNode.text(name);
    textNode.fontSize(fontSize);
    textNode.fontFamily(fontFamily);

    layer.batchDraw();

    const canvas = layer.toCanvas();
    const imgData = canvas.toDataURL("image/png");

    zip.file(`${name}.png`, imgData.split(",")[1], { base64: true });
  });

  zip.generateAsync({ type: "blob" }).then(function (content) {
    saveAs(content, "certificados.zip");
  });
}

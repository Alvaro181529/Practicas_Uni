if('serviceWorker' in navigator){
  navigator.serviceWorker.register('/sw.js')
    .then(reg => console.log('service worker registered'))
    .catch(err => console.log('service worker not registered', err));
}

window.codes = [];

function generateBarcodes() {
  if ($("#codesInput").value.trim() === "") {
    alert("Por favor, ingrese al menos un código.");
    return;
  }
  const modal = new bootstrap.Modal($("#modal-descarga"));
  const container = $("#barcode-container");
  modal.show();
  container.innerHTML = "";

  const codes = document
    .getElementById("codesInput")
    .value.split("\n")
    .map((code) => code.trim())
    .filter((code) => code !== "");

  const format = $("#barcodeFormat").value;

  window.barcodes = [];

  const rowDiv = document.createElement("div");
  rowDiv.classList.add("row");

  codes.forEach((code) => {
    const barcodeDiv = document.createElement("div");
    barcodeDiv.classList.add("barcode");
    barcodeDiv.classList.add(
      "col-12",
      "col-md-6",
      "mb-3",
      "d-flex",
      "justify-content-center",
    );
    const barcodeId = `barcode-${Math.random().toString(36).substr(2, 9)}`;
    const barcodeCanvas = document.createElement("canvas");
    barcodeCanvas.id = barcodeId;
    barcodeDiv.appendChild(barcodeCanvas);
    container.appendChild(barcodeDiv);
    JsBarcode(`#${barcodeId}`, code, { format: format });

    window.barcodes.push(barcodeCanvas);
    window.codes.push(code);
    rowDiv.appendChild(barcodeDiv);
  });
  container.appendChild(rowDiv);
}

function downloadAsImages() {
  const zip = new JSZip();

  window.barcodes.forEach((canvas, index) => {
    const code = window.codes[index];
    const sanitizedCode = sanitizeFileName(code);
    const dataURL = canvas.toDataURL("image/png");

    fetch(dataURL)
      .then((response) => response.blob())
      .then((blob) => {
        zip.file(`${index + 1}-barcode-${sanitizedCode}.png`, blob);

        if (index === window.barcodes.length - 1) {
          zip.generateAsync({ type: "blob" }).then(function (content) {
            const a = document.createElement("a");
            a.href = URL.createObjectURL(content);
            a.download = "barcodes.zip";
            a.click();
          });
        }
      })
      .catch((err) =>
        console.error("Error al convertir el canvas a Blob:", err),
      );
  });
}

function sanitizeFileName(name) {
  return name.replace(/[^a-zA-Z0-9_-]/g, "_");
}

function downloadAsPDF() {
  const { jsPDF } = window.jspdf;
  const doc = new jsPDF();

  const codesPerRow = parseInt($("#codesPerRow").value, 10);
  const rowsPerPage = parseInt($("#rowsPerPage").value, 10);

  if (
    codesPerRow < 1 ||
    rowsPerPage < 1 ||
    codesPerRow > 10 ||
    rowsPerPage > 10
  ) {
    alert("Por favor, ingrese valores válidos (entre 1 y 10).");
    return;
  }

  const pageWidth = doc.internal.pageSize.width;
  const pageHeight = doc.internal.pageSize.height;

  const marginX = 10;
  const marginY = 10;
  const spaceX = (pageWidth - 2 * marginX) / codesPerRow;
  const spaceY = (pageHeight - 2 * marginY) / rowsPerPage;

  let xPos = marginX;
  let yPos = marginY;

  window.barcodes.forEach((canvas, index) => {
    const dataURL = canvas.toDataURL("image/png");
    doc.addImage(dataURL, "PNG", xPos, yPos, spaceX - 10, spaceY - 10);

    xPos += spaceX;

    if ((index + 1) % codesPerRow === 0) {
      xPos = marginX;
      yPos += spaceY;
    }

    if ((index + 1) % (codesPerRow * rowsPerPage) === 0) {
      doc.addPage();
      xPos = marginX;
      yPos = marginY;
    }
  });

  doc.save("barcodes.pdf");
}

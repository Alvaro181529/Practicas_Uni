if('serviceWorker' in navigator){
    navigator.serviceWorker.register('../sw.js')
      .then(reg => console.log('service worker registered'))
      .catch(err => console.log('service worker not registered', err));
  }
  
  let deferredPrompt;
  
  window.addEventListener('beforeinstallprompt', (e) => {
    // Evitar que el navegador muestre automáticamente el cuadro de diálogo
    e.preventDefault();
    deferredPrompt = e;
    
    // Mostrar el botón para permitir la instalación
    const installButton = document.getElementById('install-button');
    installButton.style.display = 'block';
  
    // Manejar el clic en el botón de instalación
    installButton.addEventListener('click', () => {
      // Mostrar el cuadro de instalación
      deferredPrompt.prompt();
  
      // Esperar a que el usuario elija
      deferredPrompt.userChoice.then((choiceResult) => {
        console.log(choiceResult.outcome);
        deferredPrompt = null;
      });
    });
  });
  
const staticCacheName = "site-static-v4";
const dynamicCacheName = "site-dynamic-v4";
const assets = [
  "/Practicas_Uni/barcode-demo/",
  "/Practicas_Uni/barcode-demo/index.html",
  "/Practicas_Uni/barcode-demo/fallback.html",
  "/Practicas_Uni/barcode-demo/utils/bootstrap.js",
  "/Practicas_Uni/barcode-demo/utils/JsBarcode.all.min.js",
  "/Practicas_Uni/barcode-demo/utils/jspdf.umd.min.js",
  "/Practicas_Uni/barcode-demo/utils/jszip.min.js",
  "/Practicas_Uni/barcode-demo/style.css",
];

// cache size limit function
const limitCacheSize = (name, size) => {
  caches.open(name).then((cache) => {
    cache.keys().then((keys) => {
      if (keys.length > size) {
        cache.delete(keys[0]).then(() => limitCacheSize(name, size));
      }
    });
  });
};

// install event
self.addEventListener("install", (evt) => {
  //console.log('service worker installed');
  evt.waitUntil(
    caches.open(staticCacheName).then((cache) => {
      console.log("caching shell assets");
      cache.addAll(assets);
    })
  );
});

// activate event
self.addEventListener("activate", (evt) => {
  //console.log('service worker activated');
  evt.waitUntil(
    caches.keys().then((keys) => {
      //console.log(keys);
      return Promise.all(
        keys
          .filter((key) => key !== staticCacheName && key !== dynamicCacheName)
          .map((key) => caches.delete(key))
      );
    })
  );
});

// fetch event
self.addEventListener("fetch", (evt) => {
  // Serve static assets from the cache
  if (
    evt.request.url.includes("/Practicas_Uni/codebar-demo/") ||
    evt.request.url.includes("/Practicas_Uni/codebar-demo/index.html") ||
    evt.request.url.includes("/Practicas_Uni/codebar-demo/style.css") ||
    evt.request.url.includes("/Practicas_Uni/codebar-demo/utils/") ||
    evt.request.url.includes("/Practicas_Uni/codebar-demo/index.html")
  ) {
    evt.respondWith(
      caches.match(evt.request).then((cachedResponse) => {
        return cachedResponse || fetch(evt.request);
      })
    );
  } else {
    // Use dynamic cache for other resources
    evt.respondWith(
      caches.match(evt.request).then((cachedResponse) => {
        return (
          cachedResponse ||
          fetch(evt.request).then((response) => {
            return caches.open(dynamicCacheName).then((cache) => {
              cache.put(evt.request, response.clone());
              limitCacheSize(dynamicCacheName, 15); // Adjust size as needed
              return response;
            });
          })
        );
      })
    );
  }
});

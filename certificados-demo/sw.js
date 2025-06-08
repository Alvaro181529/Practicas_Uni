const staticCacheName = "site-static-v4";
const dynamicCacheName = "site-dynamic-v4";
const assets = [
  "https://cdn.jsdelivr.net/npm/konva@8.0.3/konva.min.js",
  "https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js",
  "https://cdnjs.cloudflare.com/ajax/libs/jszip/3.8.0/jszip.min.js",
  "https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js",
  "/Practicas_Uni/certificados-demo/styles.css",
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
    }),
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
          .map((key) => caches.delete(key)),
      );
    }),
  );
});

// fetch event
self.addEventListener("fetch", (evt) => {
  // Serve static assets from the cache
  if (
    evt.request.url.includes("/Practicas_Uni/certificados-demo/") ||
    evt.request.url.includes("/Practicas_Uni/certificados-demo/index.html") ||
    evt.request.url.includes("/Practicas_Uni/certificados-demo/styles.css") ||
    evt.request.url.includes("/Practicas_Uni/certificados-demo/index.html")
  ) {
    evt.respondWith(
      caches.match(evt.request).then((cachedResponse) => {
        return cachedResponse || fetch(evt.request);
      }),
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
      }),
    );
  }
});

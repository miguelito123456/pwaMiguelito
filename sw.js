// Asignar nombre a la cache
// CONSTANTE
const CACHE_NAME = "vi_cache_PWA";

var urlsToCache = [
    "./images/belleza.webp",
    "./images/fotografia.jpg",
    "./images/portafolio-icono-16.jpg",
    "./images/portafolio-icono-32.jpg",
    "./images/portafolio-icono-64.jpg",
    "./images/portafolio-icono-96.jpg",
    "./images/portafolio-icono-128.jpg",
    "./images/portafolio-icono-192.jpg",
    "./images/portafolio-icono-256.jpg",
    "./images/portafolio-icono-384.jpg",
    "./images/portafolio-icono-512.jpg",
    "./images/portafolio-icono-1024.jpg",
    "./images/smarthome.jpg",
    "./images/tienda.png",
    "./animations.js",
    "./index.php",
    "./main.js",
    "./manifest.json",
    "./styles.css"
];

self.addEventListener('install', e => {
    e.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                return cache.addAll(urlsToCache);
            })
            .then(() => {
                self.skipWaiting();
            })
            .catch(err => {
                console.log('No se ha cargado la caché', err);
            })
    );
});


// Evento Activate: activa el Service Worker y permite trabajar offline
self.addEventListener('activate', e => {
    const cacheWhiteList = [CACHE_NAME];

    e.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cacheName => {
                    if (!cacheWhiteList.indexOf(cacheName)=== -1) {
                        // Elimina cachés antiguos que no están en la lista blanca
                        return caches.delete(cacheName);
                    }
                })
            );
        }).then(() => {
            // Activa el Service Worker inmediatamente sin esperar a que los clientes recarguen
            return self.clients.claim();
        })
    );
});


self.addEventListener('fetch', e => {
    e.respondWith(
        caches.match(e.request)
            .then(res => {
                if (res) {
                    // devuelvo datos desde cache
                    return res;
                }
                return fetch(e.request);
            })
    );
});
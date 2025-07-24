const CACHE_NAME = 'exam-prep-v1';
const urlsToCache = [
  '/',
  '/index.html',
  '/formule.html',
  '/teoria.html',
  '/zadania.html',
  '/style.css',
  '/style1.css',
  '/style2.css',
  '/style3.css',
  '/todo.js',
  '/test.php',
  '/for.png',
  '/form.png'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        return response || fetch(event.request);
      })
  );
});
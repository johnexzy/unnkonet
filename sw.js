/* global self, caches, fetch */

// self.addEventListener('install', function(event){
//     console.log('SERVICE WORKER INSTALLED')
//     event.waitUntil(
//     caches.open('static')
//             .then(function(cache){

//                 cache.addAll([
//                     '/',
//                     'index.php',              
//                     'manifest.json',
//                     'sw.js'

//                 ])
//             })
//     )
// })
// self.addEventListener('activate', function(){
//     console.log('SERVICE WORKER ACTIVATED')
// })
// self.addEventListener('fetch', function(event){
//     event.respondWith(
//         caches.match(event.request)
//             .then(function(res){
//                 if(res){
//                     return res
//                 }
//                 else{
//                     fetch(event.request)
//                     .then(function(response){
//                       console.log('fetched from network this time')
//                       return caches.open('unnkonet').then(function(cache){
//                           cache.put(event.request, response.clone())
//                           return response
//                       }) 
//                     })
//                 }
//             })
//     )
// })
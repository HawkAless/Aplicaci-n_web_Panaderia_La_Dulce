const mix = require('laravel-mix');

mix.js('resources/js/carrito_decompra.js', 'public/js')
   .styles('resources/css/styles.css', 'public/css/styles.css');
const mix = require('laravel-mix');

mix.js('resources/js/main.js', 'public/js')
    .css('resources/css/style.css', 'public/css');


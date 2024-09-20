const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .css('resources/css/style.css', 'public/css')
    .sass('resources/sass/app.scss', 'public/sass');

mix.webpackConfig({
    stats: {
        children: true,
    }
});

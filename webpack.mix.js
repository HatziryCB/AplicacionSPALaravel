const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .vue()
    .postCss('resources/css/style.css', 'public/css', [
        require('postcss-import'),
        require('autoprefixer'),
    ])
    .sass('resources/sass/app.scss', 'public/css');

mix.webpackConfig({
    stats: {
        children: true,
    }
});

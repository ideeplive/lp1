const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/myscript.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/css/style.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [

    ]);
const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .less('resources/less/lucas.less','public/css/lucas.min.css')
    .vue()
    .version();

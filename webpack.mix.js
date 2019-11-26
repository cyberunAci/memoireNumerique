const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


/*Compiler les fichiers scss en css pour la partie client*/
mix.js('resources/js/app.js', 'public/js')
.sass('resources/sass/client/app.scss', 'public/css/client');

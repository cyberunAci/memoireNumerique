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
mix.js('resources/js/client/affichage.js', 'public/js/client')
.js('resources/js/client/carousel-video.js', 'public/js/client')
.js('resources/js/client/contact.js', 'public/js/client')
.js('resources/js/client/recherche.js', 'public/js/client')
.js('resources/js/client/regex.js', 'public/js/client')
.js('resources/js/admin/manageMemoires.js', 'public/js/admin')
.js('resources/js/admin/remove.js', 'public/js/admin')
.js('resources/js/app.js', 'public/js')
.js('resources/js/bootstrap.js', 'public/js')
.js('resources/js/jquery-m.4.1.js', 'public/js')
.sass('resources/sass/client/app.scss', 'public/css/client');

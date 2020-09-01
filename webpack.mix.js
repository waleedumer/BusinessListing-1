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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/js/backend', 'public/backend/js')
    .copyDirectory('resources/css/backend', 'public/backend/css')
    .copyDirectory('resources/global', 'public/global')
    .copyDirectory('resources/fonts/backend/webfonts', 'public/backend/webfonts')
    .copyDirectory('resources/uploads', 'public/uploads')
    .copyDirectory('resources/js/frontend', 'public/frontend/js')
    .copyDirectory('resources/css/frontend', 'public/frontend/css');


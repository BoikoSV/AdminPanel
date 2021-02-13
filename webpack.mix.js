const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/assets/admin/styles/adminlte.min.css',
    'resources/assets/admin/styles/all.min.css',
], 'public/assets/admin/css/style.css');
mix.copyDirectory([
    'resources/assets/admin/webfonts/'
], 'public/assets/admin/webfonts/');
mix.copy([
    'resources/assets/admin/styles/adminlte.min.css.map',
], 'public/assets/admin/css/adminlte.min.css.map');
mix.scripts([
    'resources/assets/admin/js/jquery.js',
    'resources/assets/admin/js/bootstrap.bundle.min.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js',
], 'public/assets/admin/js/script.js');
mix.copyDirectory([
    'resources/assets/admin/img/',
], 'public/assets/admin/img/');
mix.copy([
    'resources/assets/admin/js/adminlte.min.js.map',
], 'public/assets/admin/js/adminlte.min.js.map');

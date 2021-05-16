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
    .sass('resources/sass/app.scss', 'public/css').vue();

mix.scripts([
    'public/template/assets/vendors/js/vendor.bundle.base.js',
    'public/template/assets/vendors/chart.js/Chart.min.js',
    'public/template/assets/vendors/jquery-sparkline/jquery.sparkline.min.js',
    'public/template/assets/js/shared/off-canvas.js',
    'public/template/assets/js/shared/off-canvas.js',
], 'public/js/all.js');

mix.styles([
    'public/template/assets/css/all.css',

], 'public/css/template.min.css');

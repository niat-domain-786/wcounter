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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

// mix.js('resources/js/write-seo-article.js', 'public/js/write-seo-article.js')
//     .postCss('resources/css/app.css', 'public/css', [
//         require('postcss-import'),
//         require('tailwindcss'),
//     ]);

 //    mix.scripts([
 //    'public/dashboard/material/assets/js/core/jquery.min.js',
 //    'public/dashboard/material/assets/js/core/popper.min.js',
 //    'public/dashboard/material/assets/js/core/bootstrap-material-design.min.js',
 //    'public/dashboard/material/assets/js/plugins/perfect-scrollbar.min.js',
 //    'public/dashboard/material/assets/js/plugins/jquery.bootstrap-wizard.js',
 //    'public/dashboard/material/assets/js/material-dashboard.min6c54.js'
	// ], 'public/js/wcounter.js');

 //    mix.styles([
 //    // 'public/dashboard/material/assets/css/font-awesome.min.css',
 //    'public/dashboard/material/assets/css/material-dashboard.min6c54.css',
 //    // 'public/dashboard/material/assets/js/core/bootstrap-material-design.min.js',
 //    // 'public/dashboard/material/assets/demo/demo.css'
	// ], 'public/css/wcounter2.css');

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
    .sass('resources/sass/app.scss', 'public/css');




mix.scripts([

    'public/js/easyResponsiveTabs.js',
    'public/js/easyResponsiveTabs_desc.js',
    'public/js/jquery.flexisel.js',
    'public/js/jquery.flexisel_app.js',
 	'public/js/readmore1.js',
    'public/js/readmore1_app.js'
], 'public/js/all.js');



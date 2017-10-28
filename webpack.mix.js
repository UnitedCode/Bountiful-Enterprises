let mix = require('laravel-mix');

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

mix
    .ts('resources/assets/ts/app.ts', 'public/js')
    .ts('resources/assets/ts/admin.ts', 'public/js')
    .extract(['jquery', 'bootstrap-sass'])
    .autoload({
        jquery: ['$', 'jQuery', 'window.jQuery']
    })
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/admin.scss', 'public/css')
    .version()
    .sourceMaps()
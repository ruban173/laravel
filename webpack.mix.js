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
        //
    ]);
mix.copy('resources/dist/js/adminlte.min.js', 'public/js');
mix.copy('resources/plugins/bootstrap/js/bootstrap.bundle.min.js', 'public/js');
mix.copy('resources/plugins/jquery/jquery.min.js', 'public/js');

mix.copy([
    'resources/dist/css/adminlte.min.css',
    'resources/plugins/fontawesome-free/css/all.min.css'
], 'public/css');
mix.copyDirectory('resources/plugins/fontawesome-free/webfonts', 'public');


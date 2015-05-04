var elixir = require('laravel-elixir');


var pathToTheme = 'wp-content/themes/base-theme/'

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir.config.srcDir = '';
 elixir.config.publicDir = pathToTheme;
 elixir.config.assetsDir = pathToTheme + 'resources/assets/';
 elixir.config.cssOutput = pathToTheme + 'css';
 elixir.config.jsOutput = pathToTheme + 'js';

elixir(function(mix)
{
    mix.less([
        'theme.less'
    ]);



   mix.scripts([
        'core/javascript/jquery.js',
        'core/javascript/bootstrap.js',
        'core/javascript/jquery.validate.js',
        'resources/js/plugins/*',
        'resources/js/custom/*'
    ], pathToTheme + 'js/theme.js',pathToTheme);

});
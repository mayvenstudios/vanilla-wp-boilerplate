var elixir = require('laravel-elixir');

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

elixir.config.assetsDir = 'assets/';

elixir(function(mix)
{

    mix.less([
        'theme.less'
    ], 'public/css/theme.css');


    mix.scripts([
        'plugins/*',
        'custom/*'
    ], 'public/js/theme.js');

});
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

elixir(function(mix)
{
    /* Enable either sass or less by uncommenting one of the lines below. */

    //mix.less(['theme.less'], 'public/css/theme.css');

    //mix.sass(['theme.scss'], 'public/css/theme.css');

    mix.scripts([
        'plugins',
        'custom'
    ], 'public/js/theme.js');

});
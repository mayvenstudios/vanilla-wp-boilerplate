var gulp = require('gulp');
var elixir = require('laravel-elixir');
var del = require('del');

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

elixir.extend("remove", function(path) {
    gulp.task("remove", function() {
        del(path);
    });
    return this.queueTask("remove");
});

elixir(function(mix)
{

    mix.less([
        'theme.less'
    ], 'public/css/theme.css');


    mix.scripts([
        'plugins/*',
        'custom/*'
    ], 'public/js/theme.js');


    mix.remove([
        'public/images',
        'public/fonts'
    ]);

    mix.copy('assets/images', 'public/images');
    mix.copy('assets/fonts', 'public/fonts');
});
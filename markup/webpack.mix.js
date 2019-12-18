let mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('assets/compiled/');

mix.options({
    processCssUrls: false
  })
  .sass('assets/sass/app.scss', 'css/app.css')
  .js('assets/js/app.js', 'js/app.js')
  .version();
let mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('assets/compiled/');

mix.options({
    processCssUrls: false
  })
  .sass('assets/sass/app.scss', 'css/theme.css')
  .js('assets/js/app.js', 'js/app.js')
  /*.purgeCss({
    folders: ['views','partials', 'layouts'],
    globs: [],
    whitelistPatterns: [],
    whitelist: []
  })*/
  .version();

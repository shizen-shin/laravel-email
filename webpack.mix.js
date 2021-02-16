const mix = require('laravel-mix');
const glob = require('glob');

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

// mix.js('resources/js/app.js', 'public/js');
// mix.sass('resources/sass/app.scss', 'public/css');

glob.sync('resources/sass/*.scss').map(function(file) {
  mix.sass(file, 'public/css')
  .options({
    processCssUrls: false,
    postCss: [
      require('autoprefixer')({ grid: true })
    ]
  })
  .version()
})

glob.sync('resources/js/*.js').map(function(file) {
  mix.js(file, 'public/js').version()
});
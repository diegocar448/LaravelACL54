const { mix } = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

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

mix.webpackConfig({
  plugins:[
    new BrowserSyncPlugin({
      files:[
        '**/*.css',
        '**/*.js',
        '**/*.php'
      ]
    },{reload:false})
  ]
});

mix.combine([
  'resources/assets/js/jquery.js',
  'resources/assets/js/materialize.js',
  'resources/assets/js/init.js'
], 'public/js/app.js');

mix.combine([
  'resources/assets/css/materialize.css',
  'resources/assets/css/style.css'
],'public/css/app.css');

mix.disableNotifications();

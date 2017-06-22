const { mix } = require('laravel-mix');

const THEME_PATH = 'resources/assets/user/';
const USER_PATH = 'public/user/';
const ADMIN_PATH = 'public/admin_space/';
const THEME_PATH_ADMIN = 'resources/assets/admin/'
const NODE_PATH = 'node_modules/';

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

mix.js('resources/assets/js/app.js', 'public/js')
    .copyDirectory(THEME_PATH, USER_PATH)
    .copyDirectory(THEME_PATH_ADMIN, ADMIN_PATH)
    .sass('resources/assets/sass/app.scss', 'public/css');

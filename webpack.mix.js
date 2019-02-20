const mix = require('laravel-mix');

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
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/sass')
    .options({
        processCssUrls: false
    })
    .sourceMaps()
    .browserSync({
        port: 3002,
        ui: {
            port: 3003
        },
        host: 'localhost',
        proxy: process.env.APP_URL,
        files: [
            '.env',
            'route/**/*.php',
            'app/**/*.php',
            'resources/views/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ]
    })

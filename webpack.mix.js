const mix = require("laravel-mix");


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

// .browserSync({
//     watch: true,
//     server: "localhost",
//     port: "8000",
//     files: ["resources/scss/app.scss", "resources/js/app.js"],
// });
mix.js("resources/js/app.js", "public/js")
    .sass("resources/scss/app.scss", "public/css/new.css")
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .browserSync({
        proxy: "http://127.0.0.1:8000",
        port: "8000"
    });


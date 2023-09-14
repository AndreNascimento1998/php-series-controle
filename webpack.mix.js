const mix = require('laravel-mix');
const {sass} = require("laravel-mix");

mix
    .sass("resources/sass/app.scss", "public/css")
    .js("resources/js/app.js", 'public/js');

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

elixir(function(mix) {
	/* Add all common css */
    mix.styles([
    	"./**/*.css"
    ],"public/css/all.css","resources/css/all");
    /* Add all common js */
    mix.scripts([
    	"./**/*.js",
    ],"public/js/all.js","resources/js/all");
	/* Add all dashboard css */
    mix.styles([
    	"./**/*.css"
    ],"public/css/dashboard.css","resources/css/dashboard");
    /* Add all dashboard js */
    mix.scripts([
    	"../vendor/jquery.min.js",
    	"./**/*.js",
    ],"public/js/dashboard.js","resources/js/dashboard");
});

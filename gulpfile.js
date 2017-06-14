var gulp = require('gulp');
var elixir = require('laravel-elixir');
gulp.task('default', function () { console.log('Hello Gulp!') });

elixir(function(mix) {
    mix.less([
    	'common.less',
    	'inicio.less'
    ]);
});
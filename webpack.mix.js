let mix = require('laravel-mix');

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
	.less('resources/assets/less/common.less', 'public/css')
	.less('resources/assets/less/inicio.less', 'public/css')
	.less('resources/assets/less/quarto.less', 'public/css')
	.less('resources/assets/less/quartos.less', 'public/css')
	.less('resources/assets/less/localizacao.less', 'public/css')
	.less('resources/assets/less/galeria.less', 'public/css')
	.less('resources/assets/less/contato.less', 'public/css')
	.less('resources/assets/less/sobre.less', 'public/css')
	.less('resources/assets/less/instalacoes.less', 'public/css')
	.less('resources/assets/less/restaurantes.less', 'public/css')
	.less('resources/assets/less/atividades.less', 'public/css')
	.less('resources/assets/less/eventos.less', 'public/css');

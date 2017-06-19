<?php

//Inicio
Route::get('/', function () {
    return view('index');
});

Route::get('/sobre', function() {
	return view('sobre');
});
Route::get('/instalacoes', function() {
	return view('instalacoes');
});
Route::get('/restaurantes', function() {
	return view('restaurantes');
});
Route::get('/atividades', function() {
	return view('atividades');
});
Route::get('/eventos', function() {
	return view('eventos');
});

Route::get('/quartos', 'QuartoController@index');
Route::get('/quartos/{quarto}', 'QuartoController@show');

Route::get('/localizacao', function() {
	return view('localizacao');
});

Route::get('/galeria', function() {
	return view('galeria');
});

Route::get('/contato', function() {
	return view('contato');
});
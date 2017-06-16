<?php

//Inicio
Route::get('/', function () {
    return view('index');
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
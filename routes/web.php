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

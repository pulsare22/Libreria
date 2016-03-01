<?php



Route::get('/', function () {
    return view('home');
	
});

Route::post('/form','ambientesController@show');

//Controlador
Route::get('/controller','ambientesController@index');


<?php



Route::get('/', function () {
   // return view('home');
	return "Usando Git";
});

Route::post('/form','ambientesController@show');

//Controlador
Route::get('/controller','ambientesController@index');


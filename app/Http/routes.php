<?php



Route::get('/', function () {
   return view('home');
	//return "Usando Git";
});

Route::post('/form','ambientesController@show');

//Controlador
Route::get('/controller','ambientesController@index');



/*Route::get('/nombre/{nombre}', function($nombre){
if(preg_match("/^[A-Z a-z]+$/", $nombre)){
	return "Mi nombre es: ".$nombre;
}
else{
	return "no valido";
}
});*/
<?php



Route::get('/', function () {
   return view('home');
	//return "Usando Git";
});



Route::post('/form','ambientesController@store');

//Controlador
Route::get('/controller','ambientesController@index');


Route::get('/index', function(){
	return view ('index');
});


//Rutas del proyecto en clases 
Route::get('/pagina', function(){
	return view ('website.pagina');
});

Route::get('/tienda', function () {
   return view('website.tienda');
	//return "Usando Git";
});





/*Route::get('/nombre/{nombre}', function($nombre){
if(preg_match("/^[A-Z a-z]+$/", $nombre)){
	return "Mi nombre es: ".$nombre;
}
else{
	return "no valido";
}
});*/


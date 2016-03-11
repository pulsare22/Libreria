<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ambientesController extends Controller
{
    public function index(){
    	return "ambientesController";
    }
    
	public function show(Request $request){
	    	return $request->all();
	}

	public function store(Request $request){
		// dd($request->input());
		DB::table('usuario')->insert([
			'nombre'=> $request->nombre,
			'nick'=> $request->nick,
			'email'=> $request->email,
			'password'=> $request->password,
			'telefono'=> $request->telefono
			]);

		// return $usuario;

		echo "Registrado";
	} 
}
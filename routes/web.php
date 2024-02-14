<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info/{tipo?}', function($tipo = null){
    //dd($tipo);

    $otra = 'algo';
    return view('informacion', compact('tipo', 'otra'));
    //return view('informacion', ['tipo' => $tipo, 'otra' => $otra]);
    // return view('informacion')
    //     ->with('tipo',$tipo)
    //     ->with('otra',$otra);
});

Route::get('/contacto', function(){
    return view('contacto');
});

Route::post('/contacto_guardar', function(Request $request){
    dd($request->all(), $request->nombre, $request->correo);
    //Recibir datos
    $nombre = $request->nombre;
    $correo = $request->correo;
    $comentario = $request->comentario;
    //Validad

    //Guardar

    //Redireccionar
    return "Si llegue la ruta";

});

<?php

use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Rutas de nuestro proyecto */

Route::get('/', function () {
    return view('login');
});

route::get('/bienvenidos', function(){
    return "Bienvenidos a Fundamentos de Programacion";
});

/* route::get('/home', function(){
    return "Variedades";
}); */

/* route::get('/contactame', function(){
    return "tel: 8888-9990";
}); */

route::get('/redes', function(){
    return view('home');
});

route::get('/estudiante/facultad/{name}/{apellido?}', function ($name,$apellido=null){
    return view('estudiante.estudiante')->with('name', $name)->with('apellido', $apellido);
});

route::get('/estudiante/facultad/editar/{name}/{apellido?}', function ($name,$apellido=null){
    return view('estudiante.editar')->with('name', $name)->with('apellido', $apellido);
});

route::get('/profesor/{id}',[ProfesorController::class,'index']);
route::get('/profesor/save',[ProfesorController::class,'save']);
route::get('/profesor/delete',[ProfesorController::class,'delete']);
route::get('/profesor/editar',[ProfesorController::class,'editar']);
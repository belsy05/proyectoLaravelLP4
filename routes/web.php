<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/hola', function(){
    return "Hola Mundo";
});

Route::get('/nombre/{usuario}', function($usuario){
    return "Saludo ".$usuario;
});

Route::get('/nombres/{usuario?}', function($usuario = "Anónimo"){
    return "Saludo ".$usuario;
})->where('usuario', '[A-Za-z]+');


//prefijo: estudiante
/**Route::group(['prefix'=>'estudiante'], function(){
    // Ruta: estudiante
    Route::get('/', function(){
        return "Raiz de estudiante";
    });
    // Ruta: estudiante/crear
    Route::get('crear', function(){
        return "Ruta de crear estudiates";
    });
}); */

//usando controlador 

Route::group(['prefix'=>'estudiante'], function(){
    // Ruta: estudiante
    Route::get('/', [EstudiantesController::class, 'index']);
     // Ruta: estudiante/crear
     Route::get('crear', [EstudiantesController::class, 'crear']);
});

// Rutas para el ejemplo de plantillas Blade
Route::get('hija1', function (){
    return view ('hija1');
});

Route::get('hija2', function (){
    return view ('hija2');
});
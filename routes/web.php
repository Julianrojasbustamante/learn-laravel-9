<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hellow', function(){
    return 'Hellow Word! ';
});


Route::post('/hellow-post', function(){
    return 'Hellow Word POST! ';
});

// Route::match(['get', 'post'], 'contacto', function(){
//     return view('contacto');
// });

//Route::any('/contacto', function(){
//    return view('contacto');
//});

Route::get('contact/{nombre?}/{edad?}', function($nombre = "No existe", $edad = 10){
//    return view('contacto', array(
//        "nombre" => $nombre,
//        "edad" => $edad
//    ));
    return view('contact/contact')->with('nombre', $nombre)
        ->with('edad', $edad);
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);

Route::post('/register', [UserController::class,'register']);

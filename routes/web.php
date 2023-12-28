<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;
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

// {{-- Referencia a ruta con nombre --}}
// Route::get('/contacto', function () {
    //     return "Contactame";
    // })->name('contacto');
    
    // Route::get('/custom',function (){
        //     $msg = "Mensaje desde el servidor";
        //     return view('custom',["msg" => $msg]);
        // });  
        
        // Route::get('/',[Test::class,'test']);  

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/post',PostController::class);

// Route::get('post', [PostController::class,'index']);
// Route::get('post/{post}', [PostController::class,'show']);
// Route::get('post/create', [PostController::class,'create']);
// Route::get('post/{post}/edit', [PostController::class,'edit']);

// Route::post('post', [PostController::class,'store']);
// Route::put('post/{post}', [PostController::class,'update']);

// Route::delete('post/{post}', [PostController::class,'delete']);+


// Route::controller(TestController::class)->group(function (){
//     // Route::get('/tests/{id}','show');
//     Route::post('/tests','store');
// });



<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Models\Category;
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


// RUTA CON ID FORZOSO
// Route::get('/test/{id}', function($id){
//     echo $id;
// });

// RUTA CON ID VARIABLE
// Route::get('/test/{id?}', function($id = 10){
//     echo $id;
// });

// RUTA CON MAS ARGUMENTOS
// Route::get('/test/{id?}/{name?}', function($id = 10, $name = ''){
//     echo $id;
//     echo $name;
// });

// Route::get('/category/{id}',[ CategoryController::class, 'new']);


//RUTAS AGRUPADAS: solo se usan cuando no es un controlador resource o no esté ordenado
// Route::controller(PostController::class)->group(function(){
//     Route::get('post','index') ->name('post.index');
//     Route::get('post/{post}','show')->name('post.show');
//     Route::get('post/create','create')->name('post.create');
// });


//MIDLEWARE
//TODAS LAS RUTAS DEFINIDAS DENTRP DEL MIDDLEWARE SON VALIDADAS PRIMERO POR EL MISMO
// Route::middleware([App\Http\Middleware\TestMiddleware::class])->group(function(){
//     Route::get('/test/{id?}/{name?}', function($id = 10, $name = ''){
//         echo $id;
//         echo $name;
//     });
// });


//group
Route::group(['prefix' => 'dashboard'], function(){
    // ONLY OR EXCEPT
    // Route::resource('/post',PostController::class)->only('create');

    // Route::resource('/category',CategoryController::class);

    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
    ]);

});

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



//RUTAS DE RIPO RECURSO:

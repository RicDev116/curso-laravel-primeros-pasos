<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//group
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
    ]);

});



require __DIR__.'/auth.php';

// {{-- Referencia a ruta con nombre --}}
// Route::get('/contacto', function () {
    //     return "Contactame";
    // })->name('contacto');
    
    // Route::get('/custom',function (){
        //     $msg = "Mensaje desde el servidor";
        //     return view('custom',["msg" => $msg]);
        // });  
        
        // Route::get('/',[Test::class,'test']); 

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

// ONLY OR EXCEPT
    // Route::resource('/post',PostController::class)->only('create');

    // Route::resource('/category',CategoryController::class);

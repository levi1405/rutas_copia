<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Aqui colocamos las redirecciones a las diferentes paginas usando rutas

*/


/* Route::controller(CursoController::class)->group(function(){
    // Route::get('cursos', [CursoController::class,'index']);
    Route::get('cursos', 'index')->name('curso.index');
    Route::post('cursos', 'store')->name('curso.store');
    Route::get('cursos/create', 'create')->name('curso.create');
    Route::get('cursos/{id}', 'show')->name('curso.show');
    //en ves de mandar el id hacemos que detecte su contenido y lo almacene de una vez
    // en la variable curso_data
    Route::get('cursos/{data_curso}/edit', 'edit')->name('curso.edit');
    Route::put('cursos/{data_id}', 'update')->name('curso.update');
    Route::delete('cursos/{data}', 'destroy')->name('curso.destroy');
}); */
Route::resource('cursos',CursoController::class);
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::controller(ClienteController::class)->group(function(){
    Route::get('clientes',ClienteController::class)->name('main_client');
    Route::get('clientes/create','create')->name('clientes.create');
    Route::get('clientes/update','update')->name('clientes.update');
});
Route::controller(CategoriaController::class)->group(function(){
    Route::get('categorias',CategoriaController::class)->name('main_catg');
    Route::get('categorias/create','create')->name('catg.create');
    Route::get('categorias/update','update')->name('catg.update');
});
Route::controller(ProductController::class)->group(function(){
    Route::get('products/create','create');
    Route::get('products/update','update');
    Route::get('products/{found?}','show');
});
Route::get('/',HomeController::class)->name('home');
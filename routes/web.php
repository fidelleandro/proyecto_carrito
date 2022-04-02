<?php
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/*Invocando la clase ProductoController y usar el metodo index; con la ruta /producto*/
Route::get('/productos',[ProductoController::class,'index']);
Route::get('/crear-producto',[ProductoController::class,'crear_producto']);
Route::post('/guardar1-producto',[ProductoController::class,'guardar_producto'])->name('saveProduct');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/categorias', CategoriaController::class)->middleware('auth');
Route::resource('/proveedores', ProveedoreController::class)->middleware('auth');


require __DIR__.'/auth.php';

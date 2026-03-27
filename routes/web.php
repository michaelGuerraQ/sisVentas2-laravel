<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UnidadesController;

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


Route::get('/cliente',[ClienteController::class,'index'])->name('cliente.index');
Route::get('/producto',[ProductoController::class,'index'])->name('producto.index');
Route::get('/categoria',[CategoriaController::class,'index'])->name('categoria.index');
Route::get('/unidades',[UnidadesController::class,'index'])->name('unidades.index');

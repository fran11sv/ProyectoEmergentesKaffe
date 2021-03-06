<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\IngresProdsController;
use App\Http\Controllers\ReservasController;




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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('reservas', ReservasController::class);
Route::resource('ingresprods', IngresProdsController::class);
Route::resource('ingredientes', IngredientesController::class);
Route::resource('productos', ProductosController::class);
Route::resource('clientes', ClientesController::class);
Route::resource('categorias', CategoriasController::class);

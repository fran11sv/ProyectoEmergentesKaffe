<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;

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


//Route::get('categorias', [App\Http\Controllers\CategoriasController::class, 'index'])->name('categorias');

Route::resource('clientes', ClientesController::class);
Route::resource('categorias', CategoriasController::class);

//Route::put('categorias/create', [App\Http\Controllers\CategoriasController::class, 'create'])->name('create');

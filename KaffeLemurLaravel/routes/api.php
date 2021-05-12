<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//CATEGORIAS
Route::get('categorias',[App\Http\Controllers\CategoriasController::class,'AllCategorias']);
Route::post('categorias/Crear',[App\Http\Controllers\CategoriasController::class,'CrearCategoria']);
Route::put('categorias/Editar',[App\Http\Controllers\CategoriasController::class,'ActualizarCategoria']);
Route::delete('categorias/Eliminar/{id}',[App\Http\Controllers\CategoriasController::class,'EliminarCategoria']);

//CLIENTES
Route::get('clientes',[App\Http\Controllers\ClientesController::class,'AllClientes']);
Route::post('clientes/Crear',[App\Http\Controllers\ClientesController::class,'CrearCliente']);
Route::put('clientes/Editar',[App\Http\Controllers\ClientesController::class,'ActualizarCliente']);
Route::delete('clientes/Eliminar/{id}',[App\Http\Controllers\ClientesController::class,'EliminarCliente']);
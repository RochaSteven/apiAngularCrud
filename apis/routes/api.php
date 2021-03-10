<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Api\AuthController;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//User
Route::get('/users',[UserController::class, 'index']);
//categorias
Route::get('/categoria',[CategoriaController::class, 'index']);
Route::post('/categoria/create', [CategoriaController::class, 'store']);
Route::get('/categoria/{id}', [CategoriaController::class, 'edit']);
Route::put('/categoria/update', 'CategoriaController@update');
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy']);

//perfil 
Route::get('/perfil',[PerfilController::class, 'index']);
Route::post('/perfil/create', [PerfilController::class, 'store']);
Route::get('/perfil/{id}', [PerfilController::class, 'show']);
Route::put('/perfil/{id}',[PerfilController::class, 'update']);
Route::delete('/perfil/{id}', [PerfilController::class, 'destroy']);

//Productos
Route::get('/productos', [ProductoController::class, 'index']);
Route::post('/productos', [ProductoController::class, 'store']);
Route::get('/productos/{id}', [ProductoController::class, 'edit']);
Route::put('/productos/update', 'ProductoController@update');
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);

//Pedidos
 Route::get('/pedidos', [PedidoController::class, 'index']);
 Route::post('/pedidos/create',[PedidoController::class, 'store']);
 Route::get('/pedidos/{id}', [PedidoController::class, 'show']);
Route::put('/pedidos/{id}',[PedidoController::class, 'update']);
 Route::delete('/pedidos/{id}',[PedidoController::class, 'destroy']);


//Detalle
Route::get('/detalles', [DetalleController::class, 'index']);
Route::post('/detalles/create',[DetalleController::class, 'store']);
Route::get('/detalles/{id}', [DetalleController::class, 'show']);
Route::put('/detalles/{id}',[DetalleController::class, 'update']);
Route::delete('/detalles/{id}',[DetalleController::class, 'destroy']);



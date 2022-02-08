<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\ProduccionController;


use App\Http\Controllers\ListaClienteController;


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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('persona',PersonaController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('producto',ProductoController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('cliente',ClienteController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('pedido',PedidoController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('detallepedido',DetallePedidoController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('venta',VentaController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('detalleventa',DetalleVentaController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('insumo',InsumoController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('produccion',ProduccionController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('listacliente',ListaClienteController::class);


//show 

//Route::get('/pedido', [App\Http\Controllers\PedidoController::class, 'show'])->name('pedido.show');
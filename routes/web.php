<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('persona',PersonaController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('producto',ProductoController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('cliente',ClienteController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('pedido',PedidoController::class);
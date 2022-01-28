<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\VentaController;

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

Route::get('/', [ProductsController::class, 'index']);

Route::resource('/products', ProductsController::class);

Route::get('/venta', [VentaController::class, 'create'])->name('venta');
Route::post('/venta', [VentaController::class, 'store'])->name('venta.store');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', [MenuController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/checkout', function () {
	return view('checkout');
});

Route::post('/loginProccess', [LoginController::class, 'loginProccess']);

// Route::get('/produk', function () {
//     return view('produk');
// });

Route::get('/order', function () {
	return view('order');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
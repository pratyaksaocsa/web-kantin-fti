<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', function () {
    return view('register');
});

// Route::get('/produk', function () {
//     return view('produk');
// });

Route::get('/order', function () {
    return view('order');
});


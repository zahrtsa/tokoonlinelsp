<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//rute Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    //Akses untuk Admin
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::resource('orderAdmin', App\Http\Controllers\OrderController::class);
    Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);
    //Route::get('product/show/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
    Route::get('product/destroy/{$id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
    // Route::get('/product/show/{$id}', [App\Http\Controllers\ProductController::class, 'show'])->name('showdetail');
});

//rute User
Route::group(['middleware' => ['auth', 'customer']], function () {

    //Akses untuk User
    Route::resource('orderUser', App\Http\Controllers\OrderItemController::class);
    Route::get('product/show/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
    //Route::get('product', [App\Http\Controllers\ProductController::class, 'dashboard'])->name('dashboard.user');
});

//Route::get('/product/show', [App\Http\Controllers\ProductController::class, 'show'])->name('dashboard');

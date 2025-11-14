<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
| Semua route user + admin disatukan di sini.
| Tidak merubah tampilan sama sekali.
|--------------------------------------------------------------------------
*/

// =======================
// HALAMAN AWAL (langsung ke produk user)
// =======================
Route::get('/', function () {
    return redirect()->route('user.produk');
})->name('home');


// =======================
// USER – PRODUK LIST
// =======================
Route::get('/produk', [MenuController::class, 'userProduk'])->name('user.produk');

// DETAIL PRODUK
Route::get('/produk/{id}', [MenuController::class, 'userDetail'])->name('user.detail');


// =======================
// CHECKOUT
// =======================

// FORM CHECKOUT
Route::get('/checkout/{id}', [MenuController::class, 'checkoutForm'])->name('checkout.form');

// PROSES CHECKOUT
Route::post('/checkout/process', [MenuController::class, 'checkoutProcess'])->name('checkout.process');

// HALAMAN SELESAI (INI YANG 404 TADI)
Route::get('/user/selesai', function () {
    return view('user.selesai');
})->name('user.selesai');


// =======================
// ADMIN CRUD MENU
// =======================
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
Route::post('/menus/store', [MenuController::class, 'store'])->name('menus.store');
Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{id}/update', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/menus/{id}/delete', [MenuController::class, 'destroy'])->name('menus.destroy');


// =======================
// STORAGE FILE (untuk gambar produk)
// =======================
Route::get('storage/{path}', function ($path) {
    return Storage::disk('public')->get($path);
})->where('path', '.*')->name('storage.local');

<?php

use App\Http\Controllers\Users\HalcustController;
use App\Http\Controllers\Users\HaldetailproductController;
use App\Http\Controllers\Users\HalproductController;
use App\Http\Controllers\Users\HalaboutController;
use App\Http\Controllers\Users\HalstoreController;
use App\Http\Controllers\Users\HalcontacController;
use App\Http\Controllers\Users\HalartikelController;
use App\Http\Controllers\Users\HaldetailartikelController;
use App\Http\Controllers\Users\HalrefundController;
use App\Http\Controllers\Users\HalorderController;
use App\Http\Controllers\Users\HalfaqController;
use App\Http\Controllers\Users\HalcheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PersediaanController;
use App\Http\Controllers\Admin\GambarController;
use App\Http\Controllers\Admin\UserController;

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

require __DIR__ . '/auth.php';
    // ADMIN
Route::middleware(['auth'])->group(function () {
    //Untuk menyimpelkan memanggil berbagai fungsi
    Route::get('/', [HomeController::class, 'index']);

    Route::resource('barang', PersediaanController::class);

    Route::resource('user', UserController::class);

    Route::resource('kategori', CategoryController::class);

    Route::resource('gambar', GambarController::class);
});
    // USER
    Route::get('/home', [HalcustController::class, 'index']);

    Route::get('/product', [HalproductController::class, 'index']);

    Route::get('/product/{category}', [HalproductController::class, 'category']);

    Route::get('/detail', [HaldetailproductController::class, 'index']);

    Route::get('/detail', [HaldetailproductController::class, 'index']);

    Route::get('/about', [HalaboutController::class, 'index']);

    Route::get('/store', [HalstoreController::class, 'index']);

    Route::get('/contact', [HalcontacController::class, 'index']);

    Route::get('/artikel', [HalartikelController::class, 'index']);

    Route::get('/detailartikel', [HaldetailartikelController::class, 'index']);

    Route::get('/refund', [HalrefundController::class, 'index']);

    Route::get('/order', [HalorderController::class, 'index']);

    Route::get('/faq', [HalfaqController::class, 'index']);

    Route::get('/checkout', [HalcheckoutController::class, 'index']);

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Users\Halwhislist;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Admin\GambarController;
use App\Http\Controllers\Users\HalfaqController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\PayPalPaymentController;
use App\Http\Controllers\Users\HalcustController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Users\HalaboutController;
use App\Http\Controllers\Users\HalorderController;
use App\Http\Controllers\Users\HalstoreController;
use App\Http\Controllers\Users\HalcontacController;
use App\Http\Controllers\Users\HalrefundController;
use App\Http\Controllers\Admin\CatarticleController;
use App\Http\Controllers\Admin\PersediaanController;
use App\Http\Controllers\Login\RegistrasiController;
use App\Http\Controllers\Users\HalartikelController;
use App\Http\Controllers\Users\HalproductController;
use App\Http\Controllers\Users\HalcheckoutController;
use App\Http\Controllers\Users\HaldetailartikelController;
use App\Http\Controllers\Users\HaldetailproductController;

require __DIR__ . '/auth.php';
    // ADMIN
    Route::middleware(['auth'])->group(function () {

    });

    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('/user', UserController::class);
    Route::resource('/kategori', CategoryController::class);
    Route::resource('/gambar', GambarController::class);
    Route::resource('/article', ArticleController::class);
    Route::resource('/catarticle', CatarticleController::class);
    Route::resource('/barang', PersediaanController::class);
    Route::get('/search', [PersediaanController::class, 'search']);
    // Route::get('/login', [LoginController::class, 'login']);
    // Route::get('/registrasi', [RegistrasiController::class, 'registrasi']);

    // USER
    Route::get('/', [HalcustController::class, 'index']);
    Route::get('/product', [HalproductController::class, 'index']);
    Route::get('/product/{category}', [HalproductController::class, 'category']);
    Route::get('/detail', [HaldetailproductController::class, 'index']);
    // Route::get('/product/{slug}/detail', [HaldetailproductController::class, 'barang']);
    Route::get('/about', [HalaboutController::class, 'index']);
    Route::get('/store', [HalstoreController::class, 'index']);
    Route::get('/contact', [HalcontacController::class, 'index']);
    Route::get('/artikel', [HalartikelController::class, 'index']);
    Route::get('/detailartikel', [HaldetailartikelController::class, 'index']);
    Route::get('/refund', [HalrefundController::class, 'index']);
    Route::get('/order', [HalorderController::class, 'index']);
    Route::get('/faq', [HalfaqController::class, 'index']);
    Route::get('/checkout', [HalcheckoutController::class, 'index']);
    Route::get('/test', [TestController::class, 'index']);
    Route::get('/whislist', [Halwhislist::class, 'index']);
    Route::get('/penilaian', [Halpenilaian::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

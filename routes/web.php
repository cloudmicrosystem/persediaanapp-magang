<?php

use App\Http\Controllers\Users\HalcustController;
use App\Http\Controllers\Users\HaldetailproductController;
use App\Http\Controllers\Users\HalproductController;
use App\Http\Controllers\Users\HalaboutController;
use App\Http\Controllers\Users\HalstoreController;
use App\Http\Controllers\Users\HalcontacController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

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

    Route::get('/about', [HalaboutController::class, 'index']);

    Route::get('/store', [HalstoreController::class, 'index']);

    Route::get('/contac', [HalcontacController::class, 'index']);


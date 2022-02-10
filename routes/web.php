<?php

use App\Http\Controllers\HalcustController;
use App\Http\Controllers\HalproductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersediaanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\TransMasukController;
use App\Http\Controllers\TransKeluarController;

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

Route::middleware(['auth'])->group(function () {
    //Untuk menyimpelkan memanggil berbagai fungsi
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('barang', PersediaanController::class);
    Route::resource('user', UserController::class);
    Route::resource('vendors', VendorController::class);
    Route::resource('transmasuk', TransMasukController::class);
    Route::resource('transkeluar', TransKeluarController::class);
});

    Route::get('/index', [HalcustController::class, 'index']);
    Route::get('/halproduct', [HalproductController::class, 'index']);
    Route::resource('halproduct', HalproductController::class);

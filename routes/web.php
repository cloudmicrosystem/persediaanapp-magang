<?php

use App\Http\Controllers\Users\HalcustController;
use App\Http\Controllers\Users\HaldetailproductController;
use App\Http\Controllers\Users\HalproductController;
use App\Http\Controllers\Users\HalaboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PersediaanController;
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

Route::middleware(['auth'])->group(function () {
    //Untuk menyimpelkan memanggil berbagai fungsi
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('barang', PersediaanController::class);
    Route::resource('user', UserController::class);
    Route::resource('kategori', CategoryController::class);
});

    Route::get('/index', [HalcustController::class, 'index']);
    Route::get('/halproduct', [HalproductController::class, 'index']);
    Route::get('/haldetailproduct', [HaldetailproductController::class, 'index']);
    Route::get('/halabout', [HalaboutController::class, 'index']);
    Route::resource('halproduct', HalproductController::class);

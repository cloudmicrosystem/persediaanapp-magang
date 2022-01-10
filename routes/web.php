<?php

use App\Http\Controllers\ContohController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersediaanController;
use App\Http\Controllers\TransMasukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

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

// Jenis HTTP: GET, POST, PUT & DELETE
Route::get('/', [HomeController::class, 'index']);

//Untuk menyimpelkan memanggil berbagai fungsi
Route::resource('barang', PersediaanController::class);
Route::resource('user', UserController::class);
Route::resource('vendors', VendorController::class);
Route::resource('transmasuk', TransMasukController::class);


//Route get => contoh => index
//Route get => contoh/create => create
//Route post => contoh => post => store
//Route get => contoh/{id} => show
//Route put /patch=> contoh/{id} => update
//Route delete => contoh/{id} => delete
//Route get => contoh/{id}/edit => edit


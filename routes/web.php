<?php

use App\Http\Controllers\ContohController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersediaanController;

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
Route::get('/show_html', [HomeController::class, 'show_html']);
Route::get('/belajar_blade', [HomeController::class, 'belajar_blade']);
Route::get('/layout', [HomeController::class, 'layout']);

Route::get('/contoh', [HomeController::class, 'contoh']);
Route::get('/layouts/adminlte', [HomeController::class, 'adminlte']);
Route::post('/contoh', [HomeController::class, 'contoh_post']);

//Untuk menyimpelkan memanggil berbagai fungsi
Route::resource('barang', PersediaanController::class);
//Route get => contoh => index
//Route get => contoh/create => create
//Route post => contoh => post => store
//Route get => contoh/{id} => show
//Route put /patch=> contoh/{id} => update
//Route delete => contoh/{id} => delete
//Route get => contoh/{id}/edit => edit


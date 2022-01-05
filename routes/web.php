<?php

use App\Http\Controllers\ContohController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('/halo', function () {
    return ('Hallo Yovie');
});

// Jenis HTTP: GET, POST, PUT & DELETE
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/show_html', [HomeController::class, 'show_html']);
Route::get('/home/belajar_blade', [HomeController::class, 'belajar_blade']);
Route::get('/home/layout', [HomeController::class, 'layout']);

Route::get('/home/contoh', [HomeController::class, 'contoh']);
Route::get('/layouts/adminlte', [HomeController::class, 'adminlte']);
Route::post('/home/contoh', [HomeController::class, 'contoh_post']);

//Untuk menyimpelkan memanggil berbagai fungsi
Route::resource('contoh', ContohController::class);
//Route get => contoh => index
//Route get => contoh/create => create
//Route post => contoh => post => store
//Route get => contoh/{id} => show
//Route put /patch=> contoh/{id} => update
//Route delete => contoh/{id} => delete
//Route get => contoh/{id}/edit => edit


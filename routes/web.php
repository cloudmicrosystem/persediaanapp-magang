<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GambarController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AtributController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CatarticleController;
use App\Http\Controllers\Admin\PersediaanController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Users\Halwhislist;
use App\Http\Controllers\Users\HalfaqController;
use App\Http\Controllers\Users\HalcustController;
use App\Http\Controllers\Users\HalaboutController;
use App\Http\Controllers\Users\HalorderController;
use App\Http\Controllers\Users\HalstoreController;
use App\Http\Controllers\Users\HalcontacController;
use App\Http\Controllers\Users\HalrefundController;
use App\Http\Controllers\Users\HalartikelController;
use App\Http\Controllers\Users\HalproductController;
use App\Http\Controllers\Users\HalcheckoutController;
use App\Http\Controllers\Users\HaldetailartikelController;
use App\Http\Controllers\Users\HaldetailproductController;
use App\Http\Controllers\Users\Halpenilaian;

    // USER
    Route::get('/', [HalcustController::class, 'index']);
    Route::get('/product', [HalproductController::class, 'index']);
    Route::get('/product/{category}', [HalproductController::class, 'category']);
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
    Route::get('/test', [TestController::class, 'index']);
    Route::get('/whislist', [Halwhislist::class, 'index']);
    Route::get('/penilaian', [Halpenilaian::class, 'index']);
    // Route::get('/product/{slug}/detail', [HaldetailproductController::class, 'barang']);

    // ADMIN
    Route::resource('/user', UserController::class);

    // PRODUCT, KATEGORI, GAMBAR, ATRIBUT
    Route::get('kategori', [CategoryController::class, 'index']);
    Route::post('update-category-status', [CategoryController::class, 'updateCategoryStatus']);
    Route::match(array('get','post'),'/add-edit-category/{id?}', 'App\Http\Controllers\Admin\CategoryController@addEditCategory');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);

    Route::get('barang',[PersediaanController::class, 'index']);
    Route::post('update-product-status', [PersediaanController::class, 'updateProductStatus']);
    Route::match(array('get','post'),'/add-edit-product/{id?}', 'App\Http\Controllers\Admin\PersediaanController@addEditProduct');
    Route::get('/delete-product/{id}', [PersediaanController::class, 'deleteProduct']);

    Route::match(array('get','post'),'/add-image/{id}', 'App\Http\Controllers\Admin\PersediaanController@addImage');
    Route::get('/delete-image/{id}', [PersediaanController::class, 'deleteImage']);

    Route::post('update-atribut-status', [PersediaanController::class, 'updateAtributStatus']);
    Route::post('/edit-atribut/{id}', 'App\Http\Controllers\Admin\PersediaanController@editAtribut');
    Route::match(array('get','post'),'/add-atribut/{id}', 'App\Http\Controllers\Admin\PersediaanController@addAtribut');
    Route::get('/delete-atribut/{id}', [PersediaanController::class, 'deleteAtribut']);

    // ARTIKEL, KATEGORI
    Route::get('article',[ArticleController::class, 'index']);
    Route::post('update-article-status', [ArticleController::class, 'updateArticleStatus']);
    Route::match(array('get','post'),'/add-edit-article/{id?}', 'App\Http\Controllers\Admin\ArticleController@addEditArticle');
    Route::get('/delete-article/{id}', [ArticleController::class, 'deleteArticle']);

    Route::get('catarticle',[CatarticleController::class, 'index']);
    Route::post('update-catarticle-status', [CatarticleController::class, 'updateCatarticleStatus']);
    Route::match(array('get','post'),'/add-edit-catarticle/{id?}', 'App\Http\Controllers\Admin\CatarticleController@addEditCatarticle');
    Route::get('/delete-catarticle/{id}', [CatarticleController::class, 'deleteCatarticle']);


    Route::resource('/article', ArticleController::class);

    Auth::routes();

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.dashboard')->middleware('is_admin');


    // Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// Route::group(['middleware' => ['auth','admin']],function(){
//     Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
// });

// require __DIR__ . '/auth.php';
//     // ADMIN
//     Route::middleware(['auth'])->group(function () {
//     });

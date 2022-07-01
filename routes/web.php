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
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Users\HalcustController;
use App\Http\Controllers\Users\HalproductController;
use App\Http\Controllers\Users\HaldetailartikelController;
use App\Http\Controllers\Users\Haldetailpro;

Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::post('/add-to-cart', [CartController::class, 'addtoCart']);
        Route::get('/penilaian', [HalcustController::class, 'showRating']);
        Route::get('/wishlist', [HalcustController::class, 'showWhish']);
    });

    // USER
    Route::get('/', [HalcustController::class, 'index']);
    Route::get('/artikel', [HalcustController::class, 'showArticle']);
    Route::get('/store', [HalcustController::class, 'showStore']);
    Route::get('/about', [HalcustController::class, 'showAbout']);
    Route::get('/contact', [HalcustController::class, 'showContact']);

    Route::get('/checkout', [HalcustController::class, 'showCo']);
    Route::get('/refund', [HalcustController::class, 'showRefund']);
    Route::get('/how-to-order', [HalcustController::class, 'showHow']);
    Route::get('/faq', [HalcustController::class, 'showFaq']);

    // HALAMAN PRODUCT
    Route::get('product', [HalproductController::class, 'index']);
    Route::get('product/detail-product/{id}', [HalproductController::class, 'detailByProduct']);
    Route::get('product/{slug}', [HalproductController::class, 'categoryShow']);
    Route::get('product/{cat_slug}/{pro_slug}', [HalproductController::class, 'detailByCategory']);

    Route::get('artikel/detail-artikel/{id}', [HaldetailartikelController::class, 'detailByArtikel']);
    Route::get('/detailartikel', [HaldetailartikelController::class, 'index']);
    Route::get('/detailpro', [Haldetailpro::class, 'index']);

    // ADMIN
    Route::resource('/user', UserController::class);

    // KATEGORI PRODUCT
    Route::get('kategori', [CategoryController::class, 'index']);
    Route::match(array('get','post'),'/add-edit-category/{slug?}', 'App\Http\Controllers\Admin\CategoryController@addEditCategory');
    Route::get('/delete-category/{slug}', [CategoryController::class, 'deleteCategory']);

    // PRODUCT
    Route::get('barang',[PersediaanController::class, 'index']);
    Route::match(array('get','post'),'/add-edit-product/{id?}', 'App\Http\Controllers\Admin\PersediaanController@addEditProduct');
    Route::get('/delete-product/{id}', [PersediaanController::class, 'deleteProduct']);

    // GAMBAR DETAIL PRODUCT
    Route::match(array('get','post'),'/add-image/{slug}', 'App\Http\Controllers\Admin\PersediaanController@addImage');
    Route::get('/delete-image/{slug}', [PersediaanController::class, 'deleteImage']);

    // ATRIBUT (SIZE, STOCK, SKU)
    Route::post('/edit-atribut/{id}', 'App\Http\Controllers\Admin\PersediaanController@editAtribut');
    Route::match(array('get','post'),'/add-atribut/{id}', 'App\Http\Controllers\Admin\PersediaanController@addAtribut');
    Route::get('/delete-atribut/{id}', [PersediaanController::class, 'deleteAtribut']);

    // ARTIKEL
    Route::get('article',[ArticleController::class, 'index']);
    Route::match(array('get','post'),'/add-edit-article/{slug?}', 'App\Http\Controllers\Admin\ArticleController@addEditArticle');
    Route::get('/delete-article/{slug}', [ArticleController::class, 'deleteArticle']);


    // KATEGORI ARTIKEL
    Route::get('catarticle',[CatarticleController::class, 'index']);
    Route::match(array('get','post'),'/add-edit-catarticle/{slug?}', 'App\Http\Controllers\Admin\CatarticleController@addEditCatarticle');
    Route::get('/delete-catarticle/{slug}', [CatarticleController::class, 'deleteCatarticle']);

    // BANNER
    Route::get('banner',[BannerController::class, 'index']);
    Route::post('update-banner-status', [BannerController::class, 'updateBannerStatus']);
    Route::match(array('get','post'),'/add-edit-banner/{id?}', 'App\Http\Controllers\Admin\BannerController@addEditBanner');
    Route::get('/delete-banner/{id}', [BannerController::class, 'deleteBanner']);

    Auth::routes();

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard')->middleware('is_admin');


    // Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// Route::group(['middleware' => ['auth','admin']],function(){
//     Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
// });

// require __DIR__ . '/auth.php';
//     // ADMIN
//     Route::middleware(['auth'])->group(function () {
//     });

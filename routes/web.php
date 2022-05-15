<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => ''], function () {
  Route::get('/', [HomeController::class, 'home'])->name('home');
  Route::get('about', [HomeController::class, 'about'])->name('about');
  Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
  Route::get('blog-masonry', [HomeController::class, 'blogMasonry'])->name('blog-masonry');
  Route::get('blog-single', [HomeController::class, 'blogSingle'])->name('blog-single');
  Route::get('contact', [HomeController::class, 'contact'])->name('contact');
  Route::get('products', [HomeController::class, 'products'])->name('products');
  Route::get('product-single', [HomeController::class, 'productSingle'])->name('product-single');
  Route::get('shop', [HomeController::class, 'shop'])->name('shop');
  Route::get('cart', [HomeController::class, 'cart'])->name('cart');
  Route::get('offers', [HomeController::class, 'offers'])->name('offers');
  Route::get('our-team', [HomeController::class, 'ourTeam'])->name('our-team');
  Route::get('my-account', [HomeController::class, 'myAccount'])->name('my-account');
  Route::get('wish-list', [HomeController::class, 'wishList'])->name('wish-list');
  Route::get('check-out', [HomeController::class, 'checkOut'])->name('check-out');
  Route::get('danh-muc/{category}', [HomeController::class, 'category'])->name('home.category');
});

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'post_login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
  Route::resources([
    'product' => ProductController::class,
    'category' => CategoryController::class
  ]);
});

<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProductController as FrontProductController;
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

// Route::get('/', function () {
//     // return view('welcome');
//     $redis = app()->make('redis');
//     $redis->set('key1', 'test Value');
//     dump($redis->get('key1'));
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('about', [HomeController::class, 'index'])->name('front.about');
Route::get('contact', [HomeController::class, 'index'])->name('front.contact');
Route::get('products', [FrontProductController::class, 'index'])->name('front.products.index');
Route::get('products/{product:slug}', [FrontProductController::class, 'show'])->name('front.products.show');

Route::prefix('dashboard')->middleware(['auth'])->group(function(){
    Route::get('/', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::resource('product-attributes', ProductAttributeController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('images', ImageController::class);
    Route::resource('settings', SettingController::class);
});

<?php

use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('orderpanel', function () {
    return view('orderpanel');

});

Route::get('/products/{manufacturer}/{model}/{size}', [ProductController::class, 'getProduct']);

Route::get('/products/filter/{filter}', [ProductController::class, 'filterProducts']);

Route::get('/products/sort/{sort}', [ProductController::class, 'sortProducts']);

Route::get('/products', [ProductController::class, 'getAllProducts']);

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout/{orderId}', [OrderController::class, 'getCheckout'])->name("checkout");

////this is about link page
Route::get('/about', function () {
    return view('about');
})->name('about');

////this is about link page
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

////this is about link page
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');
<?php

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
<<<<<<< HEAD
=======

>>>>>>> 2908e95f04c31515c3b57845a551af6ee296a550
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/products/{manufacturer}/{model}/{size}', [ProductController::class, 'getProduct']);

Route::get('/products', [ProductController::class, 'getAllProducts']);

Route::get('/cart', function () {
    return view('cart');
});

<<<<<<< HEAD
Route::get('/contact', function () {
    return view('contact');
});
=======
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
>>>>>>> 2908e95f04c31515c3b57845a551af6ee296a550

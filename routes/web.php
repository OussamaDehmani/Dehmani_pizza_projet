<?php

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
/*
Route::get('/card', function () {
    return view('shoping-cart');
});
*/
Route::get('/', 'indexpage@lister')->name('index');

/* panier */
Route::get('/panier', 'CartController@index')->name('cart.index');
Route::get('/panier/{id}','CartController@destroy')->name('cart.destroy');
Route::POST('/panier/add','CartController@store')->name('cart.store');

/* payment */
Route::get('/payment','PaymentController@index')->name('payment.index');

/*details */
Route::get('/detail/{id}','DetailController@show')->name('detail.show');


Route::get('/free', function () {
    Cart::destroy();
});
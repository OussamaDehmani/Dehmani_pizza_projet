<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
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
Route::POST('/panier/addformulaire','CartController@storeformule')->name('cart.storeformule');
Route::POST('/suplement/add','CartController@sup')->name('cart.sup');
//Route::PATCH('/panier/{rowId}','CartController@update')->name('cart.update');
Route::patch('/panier/{rowId}','CartController@update')->name('cart.update');

/* payment */
Route::get('/payment','PaymentController@index')->name('payment.index');
Route::Post('/payment','PaymentController@store')->name('payment.store');
Route::get('/remerciement',function(){
   return view('/remerciement');
});

/*details */
Route::get('/detail/{id}','DetailController@show')->name('detail.show');




Route::get('/free', function () {
    Cart::destroy();
});
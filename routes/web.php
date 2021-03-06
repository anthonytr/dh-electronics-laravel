<?php

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
    return view('home');
});

Route::get('/products', 'ProductsController@index')->middleware('carrito');
Route::get('/products/create', 'ProductsController@create')->middleware('auth');
Route::post('/products/store', 'ProductsController@store');
Route::get('/products/{id}', 'ProductsController@show');
Route::delete('/products/destroy/{id}', 'ProductsController@destroy');
Route::get('/products/edit/{id}', 'ProductsController@edit');
Route::post('/products/{id}', 'ProductsController@update');

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/profile/edit/{id}', 'Auth\RegisterController@edit');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/categoria/{id}/{name}', 'ProductsController@category')->middleware('carrito');

Route::get('cart', 'CartController@show')->middleware('carrito');
Route::get('add-to-cart/{id}', 'CartController@store')->middleware('auth', 'carrito');
Route::delete('cart/{id}', 'CartController@destroy')->middleware('carrito');
Route::get('cart/edit/{id}', 'CartController@edit')->middleware('carrito');
Route::post('cart/{id}', 'CartController@update')->middleware('carrito');

Route::get('/final', function () {
    return view('final');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'usuarioAdmin'], function () {
    Route::get('/usuarioAdmin/series', 'Admin\SeriesController@index');
    Route::get('/usuarioAdmin/series/{id}', 'Admin\SeriesController@edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

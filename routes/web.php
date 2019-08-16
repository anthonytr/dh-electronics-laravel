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
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/fotografia', function () {
    return view('fotografia');
});
Route::get('/tv', function () {
    return view('tv');
});
Route::get('/accesorios', function () {
    return view('accesorios');
});
Route::get('/audio', function () {
    return view('audio');
});
Route::get('/mobile', function () {
    return view('mobile');
});
Route::get('/computadoras', function () {
    return view('computadoras');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

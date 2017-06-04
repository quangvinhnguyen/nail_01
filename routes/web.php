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
Route::get('/gallery', function() {
    return view('users.pages.gallery');
});
Route::get('/contact', function() {
    return view('users.pages.contact');
});

Auth::routes();

Route::post('/register', 'Auth\RegisterController@register');

Route::post('/login', 'Auth\LoginController@login');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/index', 'Admin\BaseController@index');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'User\BaseController@index');

    Route::get('/service', 'User\ProductController@index')->name('index');

    Route::get('/active/{email}/{token}', 'User\UserController@active');

    Route::get('/index', 'User\UserController@index');
});

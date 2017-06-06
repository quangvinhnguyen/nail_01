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

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@getLogin');

    Route::post('/login', 'LoginController@login');

    Route::get('/logout', 'LoginController@logout');
    
    Route::post('/register', 'RegisterController@register');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/admin', 'middleware' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/', 'BaseController@index');

    Route::get('/dashboard', 'BaseController@index');

    Route::resource('/services', 'ServicesController', [
        'only' => [
            'destroy',
            'store',
            'create',
            'index',
            'edit',
            'update', 
        ],
    ]);

    Route::resource('/products', 'ProductsController',[
        'only' => [
            'destroy',
            'store',
            'create',
            'index',
            'edit',
            'update',
        ],
    ]);
    
});

Route::group(['prefix' => '/', 'namespace' => 'User'], function () {
    Route::get('/', 'BaseController@index');
    
    Route::get('/service', 'ProductController@index')->name('index');

    Route::get('/active/{email}/{token}', 'UserController@active');

    Route::get('/index', 'UserController@index');
});
  
Route::group(['prefix' => '/upload', 'namespace' => 'upload'], function () {
    
        Route::get('/demo', 'UploadController@demo'); 
     Route::post('/store', 'UploadController@store');
     Route::delete('/delete','UploadController@delete');
});



Route::get('/demo', function () {
    return view('demo');
});

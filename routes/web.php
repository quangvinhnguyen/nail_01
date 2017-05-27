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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login',function(){
    return view('admin.login');
});
  Route::get('/admin/dashboard',function(){
        return view('admin.index');
    });
    // Route::get('/admin/services','Admin\ServicesController@index');
    
    Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function() {
         Route::resource('/services', 'ServicesController', [
             'only' => [
                 'destroy',
                 'store',
                 'create',
                 'index',
                 'edit',
                 'update',
                 
             ]
         ]);
         
    });
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
    Route::get('/index', 'Admin\BaseController@index');
    // Route::get('/dashboard',function(){
    //     return view('admin.index');
    // });
    // Route::get('/services','Admin\ServicesController@index');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'User\BaseController@index');

    Route::get('/service', 'User\ProductController@index')->name('index');
});

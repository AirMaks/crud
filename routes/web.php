<?php

use App\Product;



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






Route::get('/', function () {    return view('index');})->name('index');


Route::get('/login', function (){     return view('static/login');})->name ('login');

Route::get('/company', function () {    return view('static/contacts');})->name ('contacts');









Auth::routes();

Route::group(['prefix'=> '/admin', ], function(){

    Route::get('/', 'Admin\AdminController@index')->name('admin');

    Route::resource('product', 'ProductController');

    Route::resource('user', 'UserController');



});







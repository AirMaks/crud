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

Route::get('/admin', function (){     return view('admin/admin');})->name ('admin');

Route::get('/login', function (){     return view('static/login');})->name ('login');

Route::get('/company', function () {    return view('static/contacts');})->name ('contacts');



Route::get('/create_product', function (){

    DB::insert('insert into products(category, description, price) values(?, ?, ?)', ['Men', 'Prada', '100']);

});

Route::get('/view_product', function (){


    $products = Product::all();

    foreach ($products as $product) {

        return $product->description;


    }

});


Route::get('/update_product', function (){

$updated = DB::update('update products set description="Update description" where id = ?', [2]);

return $updated;
});



Route::get('/delete_product', function (){

    $deleted = DB::delete('delete from products where id = ?', ['id']);

    return $deleted;
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





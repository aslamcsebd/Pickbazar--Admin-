<?php

use Illuminate\Support\Facades\Route;



// Route::view('/{path?}','welcome');


// Back End Controller

Auth::routes();

// it will be delete

Route::get('/', function () {
    return view('index');
});

Route::get('index', 'HomeController@index');
Route::get('front', 'HomeController@front');
// it will be delete




// Route::get('/', 'HomeController@index')->name('admin.home');


// Category Routes
Route::get('categories', 'CategoryController@categories')->name('admin.categories');
Route::post('physical-category', 'CategoryController@physical_category');

Route::get('category-sub', 'CategoryController@category_sub');
Route::post('physical-sub-category', 'CategoryController@physical_sub_category');

Route::get('product-list', 'CategoryController@product_list');
Route::get('product-detail', 'CategoryController@product_detail');

// Add product
Route::get('add-product', 'CategoryController@add_product');
Route::post('add-product-item', 'CategoryController@add_product_item');

// orders
Route::get('order', 'CategoryController@order');
// comments
Route::get('comments', 'CategoryController@comments');
// reviews
Route::get('reviews', 'CategoryController@reviews');



// Front End Controller


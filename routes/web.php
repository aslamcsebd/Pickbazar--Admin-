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

// Route::view('/{path?}','welcome');

Auth::routes();

Route::get('/', 'HomeController@index')->name('admin.home');

// Category Routes
Route::get('categories', 'CategoryController@categories')->name('admin.categories');
Route::post('physical-category', 'CategoryController@physical_category');
Route::get('category-sub', 'CategoryController@category_sub');
Route::get('product-list', 'CategoryController@product_list');
Route::get('product-detail', 'CategoryController@product_detail');
Route::get('add-product', 'CategoryController@add_product');





// Create routes for Category create, read and update

// Route::get('category', 'Admin_Controller@category')->name('category');


// sub category routes
Route::get('/categories/{id}/sub-categories', 'SubCategoryController@index')->name('sub-category.index');
// Create routes for Category create, read and update

// Product Routes
Route::get('/products', 'ProductController@index')->name('product.index');
// Create routes for product create, read and update



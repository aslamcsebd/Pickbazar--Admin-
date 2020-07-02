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
Route::get('/categories', 'CategoryController@index')->name('category.index');
// Create routes for Category create, read and update

// sub category routes
Route::get('/categories/{id}/sub-categories', 'SubCategoryController@index')->name('sub-category.index');
// Create routes for Category create, read and update

// Product Routes
Route::get('/products', 'ProductController@index')->name('product.index');
// Create routes for product create, read and update



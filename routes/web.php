<?php

use Illuminate\Support\Facades\Route;


// You should use it

// Route::get('/', function () {
//     return view('auth/login');
// });


Route::get('/', function () {
    return view('admin/index');

});

// Auth::routes();

// Admin_Controller

Route::get('category', 'Admin_Controller@category')->name('category');
Route::get('category-sub', 'Admin_Controller@category_sub')->name('category-sub');
Route::get('product-list', 'Admin_Controller@product_list')->name('product-list');
Route::get('product-detail', 'Admin_Controller@product_detail')->name('product-detail');
Route::get('add-product', 'Admin_Controller@add_product')->name('add-product');

Route::get('category-digital', 'Admin_Controller@category_digital')->name('category-digital');
Route::get('category-digitalsub', 'Admin_Controller@category_digitalsub')->name('category-digitalsub');
Route::get('product-listdigital', 'Admin_Controller@product_listdigital')->name('product-listdigital');
Route::get('add-digital-product', 'Admin_Controller@add_digital_product')->name('add-digital-product');

Route::get('order', 'Admin_Controller@order')->name('order');
Route::get('transactions', 'Admin_Controller@transactions')->name('transactions');

Route::get('coupon-list', 'Admin_Controller@coupon_list')->name('coupon-list');
Route::get('coupon-create', 'Admin_Controller@coupon_create')->name('coupon-create');

Route::get('pages-list', 'Admin_Controller@pages_list')->name('pages-list');
Route::get('page-create', 'Admin_Controller@page_create')->name('page-create');

Route::get('media', 'Admin_Controller@media')->name('media');

Route::get('menu-list', 'Admin_Controller@menu_list')->name('menu-list');
Route::get('create-menu', 'Admin_Controller@create_menu')->name('create-menu');

Route::get('user-list', 'Admin_Controller@user_list')->name('user-list');
Route::get('create-user', 'Admin_Controller@create_user')->name('create-user');

Route::get('list-vendor', 'Admin_Controller@list_vendor')->name('list-vendor');
Route::get('create-vendors', 'Admin_Controller@create_vendors')->name('create-vendors');

Route::get('translations', 'Admin_Controller@translations')->name('translations');
Route::get('currency-rates', 'Admin_Controller@currency_rates')->name('currency-rates');
Route::get('taxes', 'Admin_Controller@taxes')->name('taxes');

Route::get('reports', 'Admin_Controller@reports')->name('reports');

Route::get('profile', 'Admin_Controller@profile')->name('profile');

Route::get('invoice', 'Admin_Controller@invoice')->name('invoice');
Route::get('login', 'Admin_Controller@login')->name('login');

// Route::get('', 'Admin_Controller@')->name('');
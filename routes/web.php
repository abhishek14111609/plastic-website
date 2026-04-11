<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ecommerce.index');
})->name('store.home');

Route::view('/products', 'ecommerce.products')->name('store.products');
Route::view('/product-details', 'ecommerce.product-details')->name('store.product.details');
Route::view('/cart', 'ecommerce.cart')->name('store.cart');
Route::view('/checkout', 'ecommerce.checkout')->name('store.checkout');
Route::view('/auth', 'ecommerce.auth')->name('store.auth');
Route::view('/about-us', 'ecommerce.about')->name('store.about');
Route::view('/contact-us', 'ecommerce.contact')->name('store.contact');
Route::view('/admin-dashboard', 'ecommerce.admin')->name('store.admin');

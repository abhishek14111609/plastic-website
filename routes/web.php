<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::view('/about-us', 'about')->name('about');
Route::view('/membership', 'membership')->name('membership');
Route::view('/events', 'events')->name('events');
Route::view('/publications', 'publications')->name('publications');
Route::view('/administrative-activity', 'admin-activity')->name('admin-activity');
Route::view('/contact-us', 'contact')->name('contact');

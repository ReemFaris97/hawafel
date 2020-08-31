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

Route::get('/', function () {
    return view('site.home');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/sign-in', function () {
    return view('site.sign-in');
});

Route::get('/register', function () {
    return view('site.register');
});

Route::get('/reset', function () {
    return view('site.reset');
});

Route::get('/news', function () {
    return view('site.news');
});
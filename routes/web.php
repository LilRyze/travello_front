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

Route::get('/', 'ReviewsController@getReviews');

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function() {
    return view('news');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/destinations', function () {
    return view('destinations');
});

Route::get('/elements', function () {
    return view('elements');
});

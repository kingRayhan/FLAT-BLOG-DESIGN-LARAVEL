<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog1', function () {
    return view('welcome');
})->name('blog1');


Route::get('/blog2', function () {
    return view('blog2');
})->name('blog2');

Route::get('/blog3', function () {
    return view('blog3');
})->name('blog3');

Route::get('/blog4', function () {
    return view('blog4');
})->name('blog4');

Route::get('single1', function () {
    return view('single-full-1');
})->name('single1');

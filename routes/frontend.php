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

// ------- Index --------
Route::get('/', function () {
    return view('web.index');
})->name('web.index');

// ------- About --------
Route::get('/About', function () {
    return view('web.about.about');
})->name('web.about.about');

// ------- Contact --------
Route::get('/Contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');

// ------- Portfolio --------
Route::get('/Portfolio', function () {
    return view('web.portfolio.portfolio');
})->name('web.portfolio.portfolio');
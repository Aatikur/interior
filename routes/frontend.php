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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('web.index');
// })->name('web.index');

// ------- About --------
Route::get('/About', function () {
    return view('web.about.about');
})->name('web.about.about');

// ------- Contact --------
Route::get('/Contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');

// ------- Portfolio --------
// Route::get('/Portfolio', function () {
//     return view('web.portfolio.portfolio');
// })->name('web.portfolio.portfolio');
Route::group(['namespace'=>'Web'],function(){
    Route::get('/Portfolio','WebController@gallery')->name('web.gallery');
    Route::get('/','WebController@index')->name('web.index');
    Route::get('/fetch/sub/category/{category_id}','WebController@fetchSubCat')->name('web.fetch_sub_cat');
    Route::get('/get/image/{sub_cat_id}','WebController@getImage')->name('web.get_image');
    Route::get('calculate/{sub_cat_id}/{length}/{breadth}','WebController@calculate')->name('web.calculate');
});
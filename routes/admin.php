<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/login','LoginController@index')->name('admin.login_form');    
    Route::post('login', 'LoginController@adminLogin');

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard'); 
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
        Route::get('/change/password/form', 'DashboardController@changePasswordForm')->name('admin.change_password_form');
        Route::post('/change/password', 'DashboardController@changePassword')->name('admin.change_password');
        
        Route::group(['prefix'=>'category'],function(){

            Route::get('list','CategoryController@categoryList')->name('admin.category_list');
            Route::get('add/form','CategoryController@categoryAddForm')->name('admin.category_add_form');
            Route::post('add','CategoryController@addCategory')->name('admin.add_category');
            Route::get('edit/form/{id}','CategoryController@categoryEditForm')->name('admin.category_edit_form');
            Route::put('update/{id}','CategoryController@categoryUpdate')->name('admin.category_update');
            Route::get('status/form/{id}/{status}','CategoryController@categoryStatus')->name('admin.category_status');
        });

        Route::group(['prefix'=>'subcategory'],function(){
            Route::get('list','CategoryController@subcategoryList')->name('admin.sub_category_list');
            Route::get('add/form','CategoryController@subcategoryAddForm')->name('admin.sub_category_add_form');
            Route::post('add','CategoryController@addSubCategory')->name('admin.add_sub_category');
            Route::get('edit/form/{id}','CategoryController@subCategoryEditForm')->name('admin.sub_category_edit_form');
            Route::put('update/{id}','CategoryController@subcategoryUpdate')->name('admin.sub_category_update');
            Route::get('status/{id}/{status}','CategoryController@subCategoryStatus')->name('admin.sub_category_status');
        });

        Route::group(['prefix'=>'gallery'],function(){
            Route::get('list','GalleryController@galleryList')->name('admin.gallery_list');
            Route::get('add/form','GalleryController@addImageForm')->name('admin.add_image_form');
            Route::post('add','GalleryController@addImage')->name('admin.add_image');
            Route::get('edit/form/{id}','GalleryController@imageEditForm')->name('admin.image_edit_form');
            Route::put('update/{id}','GalleryController@updateImage')->name('admin.update_image');
            Route::get('delete/{id}','GalleryController@deleteImage')->name('admin.delete_image');
        });

        Route::group(['prefix'=>'slider'],function(){
            Route::get('list','SliderController@sliderList')->name('admin.slider_list');
            Route::get('add/form','SliderController@sliderAddForm')->name('admin.slider_add_form');
            Route::post('add','SliderController@addSlider')->name('admin.add_slider');
            Route::get('delete/{id}','SliderController@deleteSlider')->name('admin.delete_slider');
            Route::get('edit/form/{id}','SliderController@sliderEditForm')->name('admin.slider_edit_form');
            Route::put('update/{id}','SliderController@updateSlider')->name('admin.update_slider');
        });
        Route::group(['prefix'=>'inquiry'],function(){
            Route::get('contact/list/form','InquiryController@contactList')->name('admin.contact_list');
            Route::get('ajax/list','InquiryController@contactListAjax')->name('admin.contact_list_ajax');
        });
        
    });   
});
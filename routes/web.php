<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){



    // route for index home website
    Route::get('/' , 'frontend\SiteController@index')->name('site.home');
    // route for about website
    Route::get('/about' , 'frontend\SiteController@about')->name('site.about');
     // route for listings website
     Route::get('/listings' , 'frontend\SiteController@listings')->name('site.listings');
    // route for sell website
    Route::get('/listings/sell' , 'frontend\SiteController@sell')->name('site.sell');
    // route for rent website
    Route::get('/listings/rent' , 'frontend\SiteController@rent')->name('site.rent');
    // route for contact website
    Route::get('/contact' , 'frontend\SiteController@contact')->name('site.contact');
    // route for send and store contact
    Route::post('/save_contact' , 'frontend\SiteController@save_contact')->name('site.contact.store');


     // route for show the form add new listings from frontend
    Route::get('/listing/form_listing' , 'frontend\SiteController@show_listing_form')->name('site.listing.form');
     // route for add new listings from frontend
    Route::post('/listing/add_listing' , 'frontend\SiteController@save_listing')->name('site.listing.store');

    // Auth routes
    Auth::routes();


});




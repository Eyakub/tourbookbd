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


Route::get('/', 'HomeController@index');


/**
 * Admin Panel
 */
Route::get('/admin-panel', 'AdminController@index');
Route::get('/tours-table', 'AdminController@toursPanel');
Route::get('/tours-insert-form', 'AdminController@insertTour');


/**
 * User Panel
 */
Route::get('/User-login', 'UserController@Userlogin');
Route::get('/User-registration', 'UserController@UserRegistration');
Route::get('/all-tour', 'UserController@allTour');
Route::get('/single-tour', 'UserController@SingleDetails');
Route::get('/single-hotel', 'HotelsController@SingleHotel');
Route::get('/single-resort', 'HotelsController@SingleResort');
Route::get('/popular', 'UserController@popularTour');
Route::get('/close-to-sea', 'UserController@closeToSea');
Route::get('/hill-tracking', 'UserController@hillTracking');
Route::get('/waterfalls', 'UserController@waterfalls');


/**
 * Coming Soon
 */
Route::get('/coming_soon', 'UserController@comingSoon');


/**
 * Hotels & Resorts
 */
Route::get('/hotels', 'HotelsController@hotels');
Route::get('/resorts', 'HotelsController@resorts');
Route::get('/restaurants', 'HotelsController@resorts');
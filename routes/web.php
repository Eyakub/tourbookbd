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
Route::get('/tours-insert-form', 'AdminController@showTourForm')->name('upload.tour');
Route::post('/tours-insert-form', 'AdminController@insertTour');


/**
 * User Panel
 */
Route::get('/user-login', 'UserController@Userlogin');
Route::get('/user-registration', 'UserController@UserRegistration')->name('upload.info');
Route::post('/user-registration', 'UserController@storeUserInformation');
Route::post('/login-check', 'UserController@loginCheck')->name('login_check');


/**
 * Tour Panel
 */
Route::get('/all-tour', 'TourController@allTour');
Route::get('/single-tour/{id}', 'TourController@singleDetails');


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



//Route::get('/home', 'HomeController@index')->name('home');

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
    return view('home');
});



/**
 * User Panel
 */
Route::get('/User-login', 'UserController@Userlogin');
Route::get('/User-registration', 'UserController@UserRegistration');
Route::get('/all_tour', 'UserController@allTour');


/**
 * Coming Soon
 */
Route::get('/coming_soon', 'UserController@comingSoon');
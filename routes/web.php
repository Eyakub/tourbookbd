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

Route::get('/tours-insert-form', 'AdminController@showTourForm')->name('upload.tour');
Route::post('/tours-insert-form', 'AdminController@insertTour');
Route::get('/all-tour-data', 'AdminController@showData');
Route::get('/edit-tour-information/{id}', 'AdminController@editTourInfo');
Route::post('/update-tour-information', 'AdminController@updateTourInfo');
Route::get('/delete-tour/{id}', 'AdminController@deleteTour');

Route::get('/hotels-insert-form', 'AdminController@showHotelForm')->name('upload.hotels');
Route::post('/hotels-insert-form', 'AdminController@insertHotel');
Route::get('/all-hotel-data', 'AdminController@showHotelData');
Route::get('/edit-hotel-information/{id}', 'AdminController@editHotelInfo');
Route::post('/update-hotel-information', 'AdminController@updateHotelInfo');
Route::get('/delete-hotel/{id}', 'AdminController@deleteHotel');

Route::get('/resorts-insert-form', 'AdminController@showResortForm')->name('upload.resorts');
Route::post('/resorts-insert-form', 'AdminController@insertResort');
Route::get('/all-resort-data', 'AdminController@showResortData');
Route::get('/edit-resort-information/{id}', 'AdminController@editResortInfo');
Route::post('/update-resort-information', 'AdminController@updateResortInfo');
Route::get('/delete-resort/{id}', 'AdminController@deleteResort');

Route::get('/all-user-data/', 'AdminController@showUserData');
Route::get('/all-user-profile/', 'AdminController@showUserProfile');
Route::get('/delete-user/{id}', 'AdminController@deleteUser');
Route::get('/all-hotel-admin-data', 'AdminController@showHotelAdminData');


/**
 * User Panel
 */
Route::get('/user-registration', 'UserController@UserRegistration')->name('upload.info');
Route::post('/user-registration', 'UserController@storeUserInformation');

Route::post('/user-profile', 'UserController@user_login')->name('login_check');
//Route::get('/user-profile/', 'UserController@loginCheck');
Route::get('/user-login', 'UserController@Userlogin');
Route::get('/logout', 'UserController@logout');

Route::post('/save-blog', 'UserController@saveBlog')->name('blog.save');



/**
 * Tour Panel
 */
Route::get('/all-tour', 'TourController@allTour');
Route::get('/single-tour/{id}', 'TourController@singleDetails');

Route::get('/single-hotel/{id}', 'HotelsController@singleDetails');
Route::get('/close-to-sea', 'TourController@closeToSea');
Route::get('/waterfall', 'TourController@waterfall');
Route::get('/naturelife', 'TourController@natureWild');
Route::get('/hikingcamping', 'TourController@hikingCamping');
Route::get('/churces', 'TourController@churces');


/**
 * Booking panel
 */
Route::get('/tours/bookings/carts/', 'BookingAndPaymentController@carts');
Route::get('/tours/bookings/carts/payments/', 'BookingAndPaymentController@payments');
Route::get('/tours/bookings/carts/payments/confirmation', 'BookingAndPaymentController@confirmation');
Route::get('/tours/bookings/carts/payments/confirmation/invoice', 'BookingAndPaymentController@invoice');


/**
 * Blog Panel
 */
Route::get('/blogs', 'BlogController@blogIndex');
Route::get('/blog-details/{id}', 'BlogController@blogDetails');


/**
 * Coming Soon
 */
Route::get('/coming_soon', 'UserController@comingSoon');


/**
 * Hotels & Resorts
 */
Route::get('/hotels', 'HotelsController@allHotels');
Route::get('/resorts', 'HotelsController@allResorts');
Route::get('/restaurants', 'HotelsController@restaurants');



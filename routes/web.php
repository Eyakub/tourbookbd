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

Route::get('/admin-panel/tours-insert-form', 'AdminController@showTourForm')->name('upload.tour');
Route::post('/admin-panel/tours-insert-form', 'AdminController@insertTour');
Route::get('/admin-panel/all-tour-data', 'AdminController@showData');
Route::get('/admin-panel/edit-tour-information/{id}', 'AdminController@editTourInfo');
Route::post('/admin-panel/update-tour-information', 'AdminController@updateTourInfo');
Route::get('/admin-panel/delete-tour/{id}', 'AdminController@deleteTour');

Route::get('/admin-panel/hotels-insert-form', 'AdminController@showHotelForm')->name('upload.hotels');
Route::post('/admin-panel/hotels-insert-form', 'AdminController@insertHotel');
Route::get('/admin-panel/all-hotel-data', 'AdminController@showHotelData');
Route::get('/admin-panel/edit-hotel-information/{id}', 'AdminController@editHotelInfo');
Route::post('/admin-panel/update-hotel-information', 'AdminController@updateHotelInfo');
Route::get('/admin-panel/delete-hotel/{id}', 'AdminController@deleteHotel');

Route::get('/admin-panel/resorts-insert-form', 'AdminController@showResortForm')->name('upload.resorts');
Route::post('/admin-panel/resorts-insert-form', 'AdminController@insertResort');
Route::get('/admin-panel/all-resort-data', 'AdminController@showResortData');
Route::get('/admin-panel/edit-resort-information/{id}', 'AdminController@editResortInfo');
Route::post('/admin-panel/update-resort-information', 'AdminController@updateResortInfo');
Route::get('/admin-panel/delete-resort/{id}', 'AdminController@deleteResort');

Route::get('/admin-panel/all-user-data/', 'AdminController@showUserData');
Route::get('/admin-panel/all-user-profile/', 'AdminController@showUserProfile');
Route::get('/admin-panel/delete-user/{id}', 'AdminController@deleteUser');
Route::get('/admin-panel/all-hotel-admin-data', 'AdminController@showHotelAdminData');

Route::get('/admin-panel/guideform', 'AdminController@showGuideForm')->name('upload.guide');
Route::post('/admin-panel/guideform', 'AdminController@insertGuide');
Route::get('/admin-panel/all-guide-profile', 'AdminController@guidesData');
Route::get('/admin-panel/edit-guide-information/{id}', 'AdminController@editGuideInfo');
Route::post('/admin-panel/update-guide-information', 'AdminController@updateGuideInfo');
Route::get('/admin-panel/delete-guide/{id}', 'AdminController@deleteGuide');

Route::get('/about-us', 'HomeController@aboutus');
Route::get('/faq', 'HomeController@faq');
Route::get('/tourist-guides', 'HomeController@touristGuide');
Route::get('/tourist-guides/{name}', 'HomeController@guideProfilePublic');


/**
 * User Panel
 */
Route::get('/user-registration', 'UserController@userRegistration')->name('upload.info');
Route::post('/user-registration', 'UserController@storeUserInformation');

Route::get('/user-login', 'UserController@userloginform');
Route::post('/user-login', 'UserController@user_login')->name('user-login');
Route::get('/user-profile/{username}', 'UserController@userprofile');
Route::get('/logout', 'UserController@logout');

Route::post('/users/save-blog', 'UserController@saveBlog')->name('blog.save');



/**
 * Tour Panel
 */
Route::get('/tours', 'TourController@allTour');
Route::get('/tours/single-tour/{id}', 'TourController@singleDetails');

Route::get('/single-hotel/{id}', 'HotelsController@singleDetails');
Route::get('/tours/close-to-sea', 'TourController@closeToSea');
Route::get('/tours/waterfall', 'TourController@waterfall');
Route::get('/tours/naturelife', 'TourController@natureWild');
Route::get('/tours/hikingcamping', 'TourController@hikingCamping');
Route::get('/tours/churces', 'TourController@churces');


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



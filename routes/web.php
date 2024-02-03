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
    //return view('welcome');
	return redirect('/login');
}); 
Route::get('/razorpay', 'RazorpayPaymentController@viewPayment')->name('razorpay');
// Route::post('/orderid-generate', 'RazorpayPaymentController@payment')->name('payment');
Route::post('/orderid-generate', 'RazorpayPaymentController@orderIdGenerate')->name('payment');
// Flight 
Route::get('/autocomplete-search', 'FlightController@autocompleteSearch');
Route::get('/flight-search-result', 'FlightController@flight_search_result')->name('flight-search-result');
Route::get('/flight_booking', 'FlightController@flight_booking')->name('flight-booking');
Route::post('/flight_search', 'FlightController@flight')->name('flight-search');
Route::post('/return-flight-search', 'FlightController@return_flight')->name('return-flight-search'); 
Route::post('/multi-city-flight-search', 'FlightController@multi_city_flight')->name('multi-city-flight-search');
Route::post('/book_now', 'FlightController@flight_booking_details')->name('flight-booking-details');
Route::post('/select_seat', 'FlightController@select_seat')->name('flight-booking-details');
Route::post('/Lcc-flight-booking', 'FlightController@lcc_flight_booking')->name('Lcc-flight-booking');
Route::post('/booking_det', 'FlightController@flight_booking_det')->name('flight-booking-detail');
Route::post('/lcc_ticket_booking', 'FlightController@lcc_ticket_booking')->name('flight-booking-detail');
Route::post('/all-flight', 'FlightController@all_flight')->name('all_flight'); 
Route::post('/price-filter', 'FlightController@price_filter')->name('price_filter');
Route::post('/stops', 'FlightController@stops')->name('stops');
Route::post('/flight-class', 'FlightController@flight_class')->name('flight-class');
Route::post('/Refundable', 'FlightController@refundable')->name('Refundable'); 
Route::post('/Airlines', 'FlightController@airlines')->name('Airlines');
// Hotel 
Route::get('/hotel', 'HotelController@hotel')->name('Hotel');
Route::post('/hotel_search', 'HotelController@hotel_search')->name('hotel-search');
Route::post('/hotel_information', 'HotelController@hotel_information')->name('hotel-Information');
Route::post('/room_information', 'HotelController@room_information')->name('room-Information');
Route::post('/room_book_now', 'HotelController@room_book_now')->name('room-book-now');
Route::post('/room_book_confirm', 'HotelController@room_book_confirm')->name('room-book-confirm');
// Report 
Route::get('/Flight-report', 'ReportController@flight_report')->name('Flight-report');
Route::get('/Hotel-report', 'ReportController@hotel_report')->name('Hotel-report');
// Admin 
Route::get('/admin-login', 'AdminController@admin_login')->name('Login');
Route::get('/User-login', 'AdminController@index')->name('Login');
Route::get('/User-Register', 'AdminController@register')->name('Register');
Route::post('/user-register', 'AdminController@user_register')->name('user-register');
Route::post('/user-login', 'AdminController@user_login')->name('user-login');
Route::post('/login-admin', 'AdminController@login_admin')->name('login-Admin');

// Admin 
Route::get('/Flight-Details', 'FlightController@get_flight_details')->name('Flight-Details');
Route::get('/Flight-Log', 'FlightController@get_flight_log_details')->name('Flight-Details');
Route::get('/Hotel-Details', 'HotelController@get_hotel_details')->name('Hotel-Details');
Route::get('/User', 'AdminController@user_details')->name('User');
Route::get('/Add-User', 'AdminController@add_user')->name('Add-User');
Route::post('/store-user', 'AdminController@user_store')->name('user-login');
Auth::routes(); 
// Filter
Route::get('/fromsearch', 'FlightController@fromsearch')->name('user-login');
Route::post('/fetch-from', 'FlightController@fatch_from')->name('user-login');
Route::post('/fetch-from1', 'FlightController@fatch_from1')->name('user-login');

// Agent 
Route::get('/Agent-Hotel-Details', 'AgentController@get_hotel_details')->name('Hotel-Details');
Route::get('/Agent-Flight-Details', 'AgentController@get_flight_details')->name('Flight-Details');
Route::get('/customer-hotels', 'CustomerController@hotels')->name('customer.hotels');
Route::get('/customer-flights', 'CustomerController@flights')->name('customer.flights');
Route::get('/customer-wallet', 'CustomerController@wallet')->name('customer.flights');
Route::post('/add-wallet', 'WalletController@add_wallet')->name('add-wallet');
Route::get('/customer-profile', 'CustomerController@profile')->name('customer-profile');
Route::get('/customer-dashboard', 'CustomerController@dashboard')->name('customer-dashboard');

// Commision 
Route::get('/Commision-Details', 'AdminController@get_commision_details')->name('Hotel-Details');
Route::get('/Add-Commision', 'AdminController@commision_add')->name('commision_add');
Route::post('/store-commision', 'AdminController@commision_store')->name('commision_store');
Route::get('/logout', 'AdminController@logout')->name('Logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/privacy-policy', 'UserController@privacy_policy')->name('privacy-policy');
Route::post('/commision-update', 'AdminController@commision_update')->name('commision.update');
// Coupon 
Route::get('/Coupon-Details', 'CouponController@get_coupon_details')->name('Coupon-Details');
Route::get('/Add-Coupon', 'CouponController@add_coupon')->name('coupon_add'); 
Route::post('/store-coupon', 'CouponController@store_coupon')->name('coupon_store');
Route::post('/update-coupon', 'CouponController@update_coupon')->name('coupon_update');
Route::post('/Coupon', 'CouponController@coupon_det')->name('coupon.check');
// Partner
Route::get('/Partner', 'AgentController@partner_signup')->name('partner.signup');
Route::post('/Partner', 'AgentController@partner_store')->name('partner.store');
Route::get('/{id}', 'AdminController@users_edit')->name('users.edit');
Route::post('/users', 'AdminController@users_update')->name('users.update');
Route::get('/{id}', 'AdminController@commision_edit')->name('commision.edit');

Route::get('/{id}', 'CouponController@edit_coupon')->name('user.view');








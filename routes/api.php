<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// firebase 
Route::get('flight_search', 'FlightController@flight');
Route::post('user-data', 'UserDetailsController@store');

//API Routes For User

// User Register Api 
Route::post('user-register', 'UserDetailsController@user_register');
// User Login Api
Route::post('login-user', 'UserDetailsController@user_login');
// User Data File Status Api 
Route::get('user-file-status', 'FlightController@file_status');
// Add Story  Api
Route::post('add-account', 'AccountDetailsController@add_account_details');
// post Account
Route::get('get-contact', 'ContectController@get_contact');
// Get Contact  Api
Route::get('get-privacy', 'PrivacyController@get_privacy');
// Banker Login Api
Route::post('bank-login', 'BankerController@bank_login');
// Banker Register Api
Route::post('bank-register', 'BankerController@bank_register');




Route::post('user-registration', 'UserController@user_registration');
Route::post('user-login', 'UserController@user_login');
Route::post('resend-register-otp', 'UserController@resend_register_otp');
Route::post('registration-otp-varify', 'UserController@registration_otp_varify');
Route::post('user-details', 'UserController@user_details');
Route::post('change-password', 'UserController@change_password');
Route::post('update-profile', 'UserController@update_profile');
Route::post('update-avatar', 'UserController@update_avatar');
Route::post('verify-user', 'UserController@varify_user');
Route::post('forgot-password', 'UserController@forgot_password');
Route::get('get-all-models', 'UserController@get_all_models');
Route::get('get-models-listing', 'UserController@get_model_listing');
Route::post('get-single-model', 'UserController@get_single_model');
Route::post('get-shops-by-category', 'UserController@get_shops_by_category');
Route::post('my-profile', 'UserController@my_profile');
Route::post('get-shop-detail', 'UserController@get_shop_detail');
Route::get('get-countries', 'UserController@get_countries');



Route::post('test-params', 'UserController@test_params');


//Category Routes
Route::get('get-categories', 'CategoryController@get_categories');

//Post Routes
Route::post('insert-post', 'PostsController@insert_post');
Route::get('get-posts', 'PostsController@get_posts');
Route::post('get-posts-by-user-id', 'PostsController@get_post_by_user_id');

//User Like Route
Route::post('user-like', 'UserLikes_Controller@user_like');

//User Comment Routes
Route::post('insert-comment', 'PostsController@insertComment');
Route::post('get-post-comments', 'PostsController@getPostComments');

//Booking Slots
Route::post('get-time-slots', 'Time_Slot_Controller@get_time_slots');

//Other Api Routes
Route::post('contact-us', 'AdminController@contact_us');
Route::get('get-subscription-plans', 'Subscription_Controller@get_subscription_plans');
Route::post('insert-user-subscription', 'Subscription_Controller@insert_user_subscription');
Route::get('get-sponsor-ad', 'AdminController@get_sponsor_ad');
Route::post('get-language', 'AdminController@get_language');

Route::post('auth-live-stream', 'Live_Streaming_Controller@auth_live_stream');
Route::post('stop-live-stream', 'Live_Streaming_Controller@stop_live_stream');
Route::get('get-live-user-image', 'Live_Streaming_Controller@get_live_user_image');

// Live Straming Routes
Route::post('add-booking', 'Live_Streaming_Controller@add_booking');

//Chat Routes
Route::post('get-chat-lists', 'UserController@get_chat_lists');
Route::post('get-old-messages', 'UserController@get_old_messages');
Route::post('marked-as-seen-msg', 'UserController@marked_as_seen_msg');
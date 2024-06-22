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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\AccountDetailsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BankerController;
use App\Http\Controllers\ContectController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EasebuzzController;
use App\Http\Controllers\FileStatusController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\Live_Streaming_Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PrivacyControlle;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Subscription_Controller;
use App\Http\Controllers\Time_Slot_Controller;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\WalletController; 
use App\Http\Controllers\MollieController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\staticController;
use App\Http\Controllers\PostAutherController;
use App\Http\Controllers\PostCategoriesController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\adminmiddleware;

// Route::get('/', function () {
//     //return view('welcome');
// 	return redirect('/login');
// }); 

Route::get('/',[staticController::class, 'index'])->name('/');
// Static page start
Route::get('/about-us',[staticController::class, 'aboutus'])->name('about-us');
Route::get('/search-hotel',[staticController::class, 'search_hotel'])->name('search-hotel');
Route::get('/visa-form-search',[staticController::class, 'visaview'])->name('visa-form-search');
Route::get('/tours-form-search',[staticController::class, 'toursview'])->name('tours-form-search');
Route::get('/flight-form-search',[staticController::class, 'flightview'])->name('flight-form-search');

Route::get('/teams',[staticController::class, 'teams'])->name('teams');
Route::get('/testimonials',[staticController::class, 'testimonials'])->name('testimonials');
Route::get('/faq',[staticController::class, 'faq'])->name('faq');
Route::get('/blogs',[staticController::class, 'blogs'])->name('blogs');

// Static page end

Route::get('/Visa-list',[VisaController::class, 'visa_list']);
Route::post('/visa-search-list',[VisaController::class, 'visa_search_list']);
Route::post('/preparePayment',[MollieController::class, 'preparePayment']);
Route::get('payment-success',[MollieController::class, 'paymentSuccess'])->name('payment.success');
Route::get('payment-cancel',[MollieController::class, 'paymentCancel'])->name('payment.cancel');

// Route::get('/Visa-list',['as'=>'Visa-list','uses'=>'VisaController::class, 'visa_list']);

Route::get('/razorpay',[RazorpayPaymentController::class, 'viewPayment'])->name('razorpay');
// Route::post('/orderid-generate',[RazorpayPaymentController::class, 'payment'])->name('payment');
Route::post('/orderid-generate',[RazorpayPaymentController::class, 'orderIdGenerate'])->name('payment');
// Setting
// Blog 
Route::get('/all-blog', [PostController::class,'index']);
Route::get('/create-blog', [PostController::class,'create']);
Route::post('/store-blog', [PostController::class,'store']);
Route::get('/edit-blog{id}', [PostController::class,'edit']);
Route::post('/update-blog', [PostController::class,'update']);
Route::get('/blog-delete{id}', [PostController::class,'delete']);

Route::get('/all-author', [PostAutherController::class,'index']);
Route::get('/create-author', [PostAutherController::class,'create']);
Route::post('/store-author', [PostAutherController::class,'store']);
Route::get('/edit-author{id}', [PostAutherController::class,'edit']);
Route::post('/update-author', [PostAutherController::class,'update']);
Route::get('/author-delete{id}', [PostAutherController::class,'delete']);

Route::get('/all-category', [PostCategoriesController::class,'index']);
Route::get('/create-category', [PostCategoriesController::class,'create']);
Route::post('/store-category', [PostCategoriesController::class,'store']);
Route::get('/edit-category{id}', [PostCategoriesController::class,'edit']);
Route::post('/update-category', [PostCategoriesController::class,'update']);
Route::get('/category-delete{id}', [PostCategoriesController::class,'delete']);
// Flight 
Route::get('/easebuzz',[EasebuzzController::class, 'initiate_payment_ebz'])->name('easebuzz');
Route::post('/filter',[FlightController::class, 'filter'])->name('flight-search');
Route::post('/city_details',[HotelController::class, 'city_details'])->name('flight-search');
Route::get('/autocomplete-search',[FlightController::class, 'autocompleteSearch']);
Route::get('/flight-search-result',[FlightController::class, 'flight_search_result'])->name('flight-search-result');
Route::get('/flight_booking',[FlightController::class, 'flight_booking'])->name('flight-booking');
Route::post('/flight_search',[FlightController::class, 'flight'])->name('flight-search');
Route::post('/return-flight-search',[FlightController::class, 'return_flight'])->name('return-flight-search'); 
Route::post('/multi-city-flight-search',[FlightController::class, 'multi_city_flight'])->name('multi-city-flight-search');
Route::post('/book_now',[FlightController::class, 'flight_booking_details'])->name('flight-booking-details');
Route::post('/select_seat',[FlightController::class, 'select_seat'])->name('flight-booking-details');
Route::post('/Lcc-flight-booking',[FlightController::class, 'lcc_flight_booking'])->name('Lcc-flight-booking');
Route::post('/booking_det',[FlightController::class, 'flight_booking_det'])->name('flight-booking-detail');
Route::post('/lcc_ticket_booking',[FlightController::class, 'lcc_ticket_booking'])->name('flight-booking-detail');
Route::post('/all-flight',[FlightController::class, 'all_flight'])->name('all_flight'); 
Route::post('/price-filter',[FlightController::class, 'price_filter'])->name('price_filter');
Route::post('/stops',[FlightController::class, 'stops'])->name('stops');
Route::post('/flight-class',[FlightController::class, 'flight_class'])->name('flight-class');
Route::post('/Refundable',[FlightController::class, 'refundable'])->name('Refundable'); 
Route::post('/Airlines',[FlightController::class, 'airlines'])->name('Airlines');
Route::get('/ticket-cancel{id}',[FlightController::class, 'ticket_cancel'])->name('ticket_cancel');
Route::get('/ticket-details{id}',[FlightController::class, 'ticket_details'])->name('ticket_details');

Route::get('/hotel-cancel{id}',[HotelController::class, 'hotel_cancel'])->name('hotel_cancel');
Route::get('/hotel-booking-details{id}',[HotelController::class, 'hotel_booking_details'])->name('hotel_booking_details');

Route::post('/currency-change',[FlightController::class, 'currency_change'])->name('currency_change');
// Tour 
Route::get('/tour-search',[TourController::class, 'tour_search']);
Route::get('/tour-details',[TourController::class, 'tour_details'])->name('tour_details');
Route::get('/tour-list',[TourController::class, 'tour_search_list'])->name('tour_search_list');
Route::get('/tour',[TourController::class, 'get_tour'])->name('tour');
Route::get('/add-tour',[TourController::class, 'add_tour'])->name('tour');
Route::get('/tour-detail{id}',[TourController::class, 'tour_detail'])->name('tour');
Route::post('/tour-add',[TourController::class, 'tour_store'])->name('tour_store');
Route::get('/add-tour-package',[TourController::class, 'add_tour_package'])->name('tour');
Route::post('/tour-package',[TourController::class, 'tour_package'])->name('tour_store');
Route::post('/book-package',[TourController::class, 'book_package'])->name('tour_store');
Route::get('/book-tour',[TourController::class, 'book_tour'])->name('tour_store');
Route::get('/currency',[TourController::class, 'currency'])->name('currency');
Route::post('/currency-update',[TourController::class, 'currency_update'])->name('currency_update');
Route::get('/all-tour-package',[TourController::class, 'all_tour_package'])->name('all_tour_package');
Route::get('/tour-booking-details',[TourController::class, 'tour_booking_details'])->name('tour-booking-details');
Route::get('/tour-delete{id}',[TourController::class, 'tour_delete'])->name('tour');
Route::get('/tour-edit{id}',[TourController::class, 'tour_edit'])->name('tour');
Route::post('/tour-update',[TourController::class, 'tour_update'])->name('tour-update');
Route::post('/tour-search-list',[TourController::class, 'tour_list_search'])->name('tour-search-list');
Route::post('/book-tour-payment',[TourController::class, 'preparePayment'])->name('tour-update');
// Visa 
Route::get('/Visa',[VisaController::class, 'index'])->name('visa');
Route::get('/Add-visa',[VisaController::class, 'add_visa'])->name('visa');
Route::get('/Visa-Package',[VisaController::class, 'visa_package'])->name('visa');
Route::get('/Add-Visa-Package',[VisaController::class, 'add_visa_package'])->name('visa');
Route::post('/visa-add',[VisaController::class, 'visa_store'])->name('visa-add');
Route::post('/visa-package-store',[VisaController::class, 'visa_package_store'])->name('visa-add');
Route::get('/visa-edit{id}',[VisaController::class, 'visa_edit'])->name('visa');
Route::post('/visa-update',[VisaController::class, 'visa_update'])->name('visa-update');
Route::get('/visa-delete{id}',[VisaController::class, 'visa_delete'])->name('visa');
// Route::get('/Visa-list',[VisaController::class, 'visa_list'])->name('visa');
Route::get('/Visa-booking-details',[VisaController::class, 'all_visa_booking'])->name('visa');
Route::get('/visa-detail{id}',[VisaController::class, 'visa_details'])->name('visa'); 
Route::post('/book-visa-package',[VisaController::class, 'book_visa_package'])->name('book-visa-package');
Route::get('/book-visa',[VisaController::class, 'book_visa'])->name('book-visa');
Route::post('/book-visa-payment',[VisaController::class, 'preparePayment'])->name('book-visa');
Route::get('/visa-view{id}',[VisaController::class, 'view_visa'])->name('view_visa');
// Hotel 
Route::get('/hotel',[HotelController::class, 'hotel'])->name('Hotel');
Route::post('/hotel_search',[HotelController::class, 'hotel_search'])->name('hotel-search');
Route::post('/hotel_information',[HotelController::class, 'hotel_information'])->name('hotel-Information');
Route::post('/room_information',[HotelController::class, 'room_information'])->name('room-Information');
Route::post('/room_book_now',[HotelController::class, 'room_book_now'])->name('room-book-now');
Route::get('/room_book_confirm',[HotelController::class, 'room_book_confirm'])->name('room-book-confirm');
Route::post('/room_book_payment',[HotelController::class, 'preparePayment'])->name('preparePayment');
Route::post('/hotel-location',[HotelController::class, 'getHotelLocation']);
Route::post('/hotel-city-search',[HotelController::class, 'getCityList']);
// Report 
Route::get('/Flight-report',[ReportController::class, 'flight_report'])->name('Flight-report');
Route::get('/Hotel-report',[ReportController::class, 'hotel_report'])->name('Hotel-report');
// Payment
Route::post('/wallet-payment',[PaymentController::class, 'wallet_payment'])->name('wallet_payment');
// Admin 
Route::get('/admin-login',[AdminController::class, 'admin_login'])->name('admin-login');
Route::get('/User-login',[AdminController::class, 'index'])->name('User-Login');
Route::get('/User-Register',[AdminController::class, 'register'])->name('Register');
Route::post('/user-register',[AdminController::class, 'user_register'])->name('user-register');
Route::post('/user-login',[AdminController::class, 'user_login'])->name('user-login');
Route::post('/user_login',[AdminController::class, 'user_login'])->name('user-login');

Route::post('/login-admin',[AdminController::class, 'login_admin'])->name('login-admin');
// Route::get('/login-admin',[AdminController::class, 'login_admin'])->name('login-Admin');


//Middleware admin control session
Route::group(['middleware' => ['admin.auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/Setting',[AdminController::class, 'setting'])->name('setting');
Route::post('/setting-update',[AdminController::class, 'setting_update'])->name('setting_update');
Route::post('/login-form',[AdminController::class, 'login_form'])->name('login_form');
Route::post('/signup-form',[AdminController::class, 'signup_form'])->name('signup-form');

Route::get('/Api-Setting',[AdminController::class, 'api_setting'])->name('api_setting');
Route::post('/setting-api-update',[AdminController::class, 'api_setting_update'])->name('api_setting_update');

Route::get('/flight-Setting',[AdminController::class, 'flight_setting'])->name('flight_setting');
Route::post('/setting-flight-update',[AdminController::class, 'flight_setting_update'])->name('flight_setting_update');

Route::get('/general-Setting',[AdminController::class, 'general_setting'])->name('general_setting');
Route::post('/setting-general-update',[AdminController::class, 'general_setting_update'])->name('general_setting_update');

// Markup
Route::get('/all-markup',[AdminController::class, 'all_markup'])->name('all-markup');
Route::get('/add-markup',[AdminController::class, 'add_markup'])->name('add-markup');
Route::post('/store-markup',[AdminController::class, 'store_markup'])->name('store_markup');
Route::post('/markup-update',[AdminController::class, 'update_markup'])->name('update_markup');
// Markup Apply
Route::get('/all-markup-apply',[AdminController::class, 'all_markup_apply'])->name('all-apply-markup');
Route::get('/apply-markup',[AdminController::class, 'apply_markup'])->name('apply-markup');
Route::post('/store-markup-apply',[AdminController::class, 'store_apply_markup'])->name('store_markup_apply');
Route::post('/markup-apply-update',[AdminController::class, 'update_apply_markup'])->name('update_markup_apply');

// Commision 
Route::get('/Commision-Details',[AdminController::class, 'get_commision_details'])->name('Hotel-Details');
Route::get('/Add-Commision',[AdminController::class, 'commision_add'])->name('commision_add');
Route::post('/store-commision',[AdminController::class, 'commision_store'])->name('commision_store');


Route::get('/Commision-Apply',[AdminController::class, 'commision_apply'])->name('Commision-Apply');
Route::get('/All-Commision-Apply',[AdminController::class, 'all_commision_add'])->name('All-Commision-Apply');
Route::post('/store-commision-apply',[AdminController::class, 'store_commision_apply'])->name('store-commision-apply');

Route::post('/commision-update',[AdminController::class, 'commision_update'])->name('commision.update');

});


Route::get('/privacy-policy',[FlightController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/term-conditions',[FlightController::class, 'term_conditions'])->name('privacy-policy');
Route::get('/refund_policy',[FlightController::class, 'refund_policy'])->name('refund_policy');
Route::get('/contact-us',[FlightController::class, 'contact_us'])->name('refund_policy');
Route::post('/contact-store',[AdminController::class, 'contact_store'])->name('login-Admin');
// Admin 
Route::get('/privacy-policy',[FlightController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/Flight-Details',[FlightController::class, 'get_flight_details'])->name('Flight-Details');
Route::get('/Flight-Log',[FlightController::class, 'get_flight_log_details'])->name('Flight-Details');
Route::get('/Hotel-Details',[HotelController::class, 'get_hotel_details'])->name('Hotel-Details');
Route::get('/User',[AdminController::class, 'user_details'])->name('User');
Route::get('/Add-User',[AdminController::class, 'add_user'])->name('Add-User');
Route::post('/store-user',[AdminController::class, 'user_store'])->name('user-login');
Auth::routes(); 
// Filter
Route::get('/fromsearch',[FlightController::class, 'fromsearch'])->name('user-login');
Route::post('/fetch-from',[FlightController::class, 'fatch_from'])->name('user-login');
Route::post('/fetch-from1',[FlightController::class, 'fatch_from1'])->name('user-login');

// Agent 
Route::get('/Agent-Hotel-Details',[AgentController::class, 'get_hotel_details'])->name('Hotel-Details');
Route::get('/Agent-Flight-Details',[AgentController::class, 'get_flight_details'])->name('Flight-Details');
Route::get('/customer-hotels',[CustomerController::class, 'hotels'])->name('customer.hotels');
Route::get('/customer-flights',[CustomerController::class, 'flights'])->name('customer.flights');
Route::get('/customer-wallet',[CustomerController::class, 'wallet'])->name('customer.flights');
Route::post('/add-wallet',[WalletController::class, 'add_wallet'])->name('add-wallet');
Route::get('/customer-profile',[CustomerController::class, 'profile'])->name('customer-profile');
Route::get('/customer-dashboard',[CustomerController::class, 'dashboard'])->name('customer-dashboard');

Route::get('/wallet',[WalletController::class, 'wallet'])->name('customer.wallet');
Route::get('/wallet-info',[WalletController::class, 'wallet_details'])->name('wallet_details');
Route::post('/store-wallet',[WalletController::class, 'store_wallet'])->name('add-wallet');
Route::post('/update-wallet',[WalletController::class, 'update_wallet'])->name('add-wallet');

Route::get('/logout',[AdminController::class, 'logout'])->name('Logout');
Route::get('/home',[HomeController::class, 'index'])->name('home');
// Coupon 
Route::get('/Coupon-Details',[CouponController::class, 'get_coupon_details'])->name('Coupon-Details');
Route::get('/Add-Coupon',[CouponController::class, 'add_coupon'])->name('coupon_add'); 
Route::post('/store-coupon',[CouponController::class, 'store_coupon'])->name('coupon_store');
Route::post('/update-coupon',[CouponController::class, 'update_coupon'])->name('coupon_update');
Route::post('/Coupon',[CouponController::class, 'coupon_det'])->name('coupon.check');
// Partner
Route::get('/Partner',[AgentController::class, 'partner_signup'])->name('partner.signup');
Route::post('/Partner',[AgentController::class, 'partner_store'])->name('partner.store');
Route::get('/{id}',[AdminController::class, 'users_edit'])->name('users.edit');
Route::post('/users',[AdminController::class, 'users_update'])->name('users.update');
Route::get('/{id}',[AdminController::class, 'commision_edit'])->name('commision.edit');

Route::get('/{id}',[CouponController::class, 'edit_coupon'])->name('user.view');




Route::middleware(['admin.auth'])->group(function () {
    // Your admin routes go here
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
 
});





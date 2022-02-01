<?php

use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\SettingsController;
use App\Models\backend\Order;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('shop', 'FrontendController@shop')->name('frontend.shop');
Route::get('design', 'FrontendController@designList')->name('frontend.design');
Route::get('repairing', 'FrontendController@repairing')->name('frontend.repairing');
Route::get('booking/{id}', 'FrontendController@bookingDesing')->name('frontend.booking');
Route::get('product-details/{id}', 'FrontendController@productDetails')->name('frontend.product-details');
Route::get('checkout/{id}', 'FrontendController@checkout')->name('frontend.checkout');
Route::post('repairing-submit', 'backend\ServiceController@storeRepairing')->name('repairing.post');

Route::post("booking/create",[App\Http\Controllers\BookingController::class,"create"])->name("frontend.booking.create");

// backend route
Route::get('admin/login', 'Auth\AdminAuthController@loginForm')->name('admin.login.get');
Route::post('admin/login', 'Auth\AdminAuthController@login')->name('admin.login.post');
Route::post('admin/logout', 'Auth\AdminAuthController@logout')->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', function(){
        return view("backend.dashboard",["orders"=>Order::latest()->get()]);
    })->name('admin.dashboard');
    Route::view('site-settings','backend.settings')->name("site-settings");
    Route::post("settings",[SettingsController::class,"save"]);
    Route::get("/download/money-receipt/{id}",[PdfController::class,"download"])->name("download.money-receipt");
    // product route
    Route::resource('product', 'backend\ProductController');
    Route::get('delete-product/{id}', 'backend\ProductController@destroy');
    Route::resource('categories', 'backend\CategoryController');
    Route::get('delete-category/{id}', 'backend\CategoryController@destroy');
    Route::resource('services', 'backend\ServiceController');
    Route::resource('booking', 'backend\BookingController');
    Route::get("/booking/delete/{id}",[BookingController::class,"delete"])->name("booking.delete");
    Route::resource('orders', 'backend\OrderController');

    Route::get("orders/delete/{id}",[OrderController::class,"delete"])->name("orders.delete");
    Route::resource('customers', 'backend\CustomerController');
    Route::get('customer/{id}', [CustomerController::class,"delete"])->name("customers.delete");
    Route::resource('payments', 'backend\PaymentController');
    Route::get('carpenter', function (){
        return view('backend.carpenter.index');
    })->name('carpenter.index');


    Route::get("/repairing/{id}",[RepairController::class,"show"]);
    Route::get("/repairing/delete/{id}",[RepairController::class,"delete"]);
    Route::get('/reparing/approve/{id}',[RepairController::class,"approve"]);
    Route::get('/reparing/disapprove/{id}',[RepairController::class,"disapprove"]);

    Route::get("/faq",[FaqController::class,"index"])->name("faq.index");
    Route::get("faq/create",[FaqController::class,"create"])->name("faq.create");
    Route::post("faq/store",[FaqController::class,"store"])->name("faq.store");
    Route::get("faq/edit/{id}",[FaqController::class,"edit"])->name("faq.edit");
    Route::post("faq/update",[FaqController::class,"update"])->name("faq.update");
    Route::get("faq/delete/{id}",[FaqController::class,"delete"])->name("faq.delete");


});

Route::get("/profile",[ProfileController::class,"index"])->name("profile.index");
Route::post("/profile/store",[ProfileController::class,"store"])->name("profile.store");
Route::get("/profile/change-password",[ProfileController::class,"changePassword"])->name("profile.change-password");
Route::post("/profile/reset-password",[ProfileController::class,"resetPassword"])->name("profile.reset-password");
Route::get("/contacts",[FrontendController::class,"contact"])->name("contact.show");
Route::post("/mail/send",[FrontendController::class,"sendEmail"])->name("mail.send");

Route::post("/search",[FrontendController::class,"search"])->name("frontend.search");
Route::get("/search/details/{id}",[FrontendController::class,"viewDetails"])->name("search.details");
Route::get("/faqs",[FrontendController::class,"showFaq"])->name("frontend.faqs");

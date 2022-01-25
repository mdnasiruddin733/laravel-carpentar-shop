<?php

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
Route::get('booking/{slug}', 'FrontendController@bookingDesing')->name('frontend.booking');
Route::get('product-details/{id}', 'FrontendController@productDetails')->name('frontend.product-details');
Route::get('checkout/{id}', 'FrontendController@checkout')->name('frontend.checkout');


// backend route
Route::get('admin/login', 'Auth\AdminAuthController@loginForm')->name('admin.login.get');
Route::post('admin/login', 'Auth\AdminAuthController@login')->name('admin.login.post');
Route::post('admin/logout', 'Auth\AdminAuthController@logout')->name('admin.logout');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::view('dashboard', 'backend.dashboard')->name('admin.dashboard');
    // product route
    Route::resource('product', 'backend\ProductController');
    Route::get('delete-product/{id}', 'backend\ProductController@destroy');
    Route::resource('categories', 'backend\CategoryController');
    Route::get('delete-category/{id}', 'backend\CategoryController@destroy');
    Route::resource('services', 'backend\ServiceController');
    Route::resource('booking', 'backend\BookingController');
    Route::resource('orders', 'backend\OrderController');
    Route::resource('customers', 'backend\CustomerController');
    Route::resource('payments', 'backend\PaymentController');
    Route::get('carpenter', function (){
        return view('backend.carpenter.index');
    })->name('carpenter.index');
});


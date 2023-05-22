<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerlistController;
use App\Http\Controllers\BookingDispatchController;
use App\Http\Controllers\SslCommerzPaymentController;



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
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function (){
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/', [DashboardController::class, 'Dashboard'])->name('dashboard');
    // customerlist
     Route::get('/user',[CustomerlistController::class, 'customerlist'])->name('customer.index');
     Route::get('/user/delete/{user_id}',[CustomerlistController::class,'deletecustomerlist'])->name('admin.customerlist.delete');
    // branch
    Route::get('/branch', [BranchController::class, 'index'])->name('branch.index');
    Route::get('/branch/create', [BranchController::class, 'create'])->name('branch.create');
    Route::post('/branch/store', [BranchController::class, 'store'])->name('branch.store');

    //Route::get('/user.userfrom', [UserController::class, 'from']);name('user.from');
    //Route::get('/',[WebController::class,'web'])->name('webpage');
Route::get('/branch/delete/{branch_id}',[BranchController::class,'deletebranch'])->name('admin.branch.delete');
Route::get('/branch/view/{branch_id}',[BranchController::class,'viewbranch'])->name('admin.branch.view');
Route::get('/branch/edit/{branch_id}',[BranchController::class,'edit'])->name('branch.edit');
Route::put('/branch/update/{branch_id}',[BranchController::class,'update'])->name('branch.update');

//parcel type

Route::get('/parcel', [ParcelController::class, 'type'])->name('parcel.type');
Route::get('/parcel/from', [parcelController::class, 'from'])->name('parcel.from');
Route::post('/parcel/stores', [parcelController::class, 'stores'])->name('parcel.stores');

Route::get('/parcel/delete/{parcel_id}',[ParcelController::class,'deleteparcel'])->name('admin.parcel.delete');
Route::get('/parcel/view/{parcel_id}',[parcelController::class,'viewparcel'])->name('admin.parcel.view');
Route::get('/paecel/edit/{parcel_id}',[parcelController::class,'edit'])->name('parcel.edit');
Route::put('/parcel/update/{parcel_id}',[parcelController::class,'update'])->name('parcel.update');


// booking
Route::get('/booking', [BookingController::class, 'bookinglist'])->name('admin.booking');

Route::get('/booking/delete/{booking_id}',[BookingController::class,'deletebooking'])->name('admin.booking.delete');
Route::get('/booking/view/{booking_id}',[BookingController::class,'viewbooking'])->name('admin.booking.view');
Route::get('/booking/deliver/{booking_id}',[BookingController::class,'edit'])->name('booking.deliver');

Route::get('/booking/dispatch/{booking_id}',[BookingDispatchController::class,'bookingDispatch'])->name('booking.dispatch');
Route::post('/booking/dispatch/{booking_id}',[BookingDispatchController::class,'detailsdispatch'])->name('booking.details');


// cargo
Route::get('/cargo', [CargoController::class, 'type'])->name('cargo.type');
Route::get('/cargo/from', [CargoController::class, 'from'])->name('cargo.from');
Route::post('/cargo/stores', [CargoController::class, 'stores'])->name('cargo.stores');

Route::get('/cargo/delete/{cargo_id}',[CargoController::class,'deletecargo'])->name('admin.cargo.delete');
Route::get('/cargo/view/{cargo_id}',[CargoController::class,'viewcargo'])->name('admin.cargo.view');
Route::get('/cargo/edit/{cargo_id}',[CargoController::class,'edit'])->name('cargo.edit');
Route::put('/cargo/update/{cargo_id}',[CargoController::class,'update'])->name('cargo.update');


// dispatchdetails
Route::get('/dispatchdetails', [BookingDispatchController::class, 'details'])->name('admin.dispatch');
//  contact
Route::get('/contact', [ContactController::class, 'see'])->name('admin.contact');
Route::get('/contact/delete/{contact_id}',[ContactController::class,'deletecontact'])->name('admin.contact.delete');

// report
Route::get('/report',[ReportController::class,'report'])->name('booking.report');
Route::get('/report/search',[ReportController::class,'reportSearch'])->name('booking.report.search');

});
Route::get('/',[WebController::class,'web'])->name('webpage');
Route::post('/register', [WebController::class, 'registration'])->name('registration');
Route::post('/login', [WebController::class, 'login'])->name('user.login');

Route::group(['middleware'=>'auth'],function(){

Route::get('/logout', [WebController::class, 'logout'])->name('user.logout');
Route::post('/booking', [BookingController::class, 'book'])->name('booking');
Route::get('/booking', [BookingController::class, 'list'])->name('booking');
Route::get('/contact', [ContactController::class, 'message'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/profile',[WebController::class,'profile'])->name('user.profile');
Route::put('/profile/update',[WebController::class,'updateProfile'])->name('profile.update');
});

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('ssl.payment');
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);







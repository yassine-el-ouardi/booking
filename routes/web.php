<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaypalController;
use App\Models\City;
use App\Models\Guest;
use App\Models\Reservationguest;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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


Route::get('/',[HomeController::class,'index'])->name('home');

Route::match(['GET','POST'],'/search',[HomeController::class,'search'])->name('search');


Route::get('/hotels', function () {
    return view('main.hotels');
})->name("hotels");

Route::get('/admin1',function(){
    return view('admin.index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('hotel',[HomeController::class,'hoteldetails']);


Route::get('/contact',function(){
    return view('main.contact');
})->name('contact');

Route::get('room',[HomeController::class,'roomdetails']);

Route::get('rooms',[HomeController::class,'rooms'])->name('rooms');

Route::get('hotels',[HomeController::class,'hotels'])->name('hotels');



Route::get('cart',function(){
    return view('main.cart');
});

Route::get('about',[HomeController::class,'about'])->name('about');

Route::get('location',function(){
    return view('main.location');
})->name('location');

Route::match(['GET','POST'],'add',[CartController::class,'addRoomToCart'])->name('add.cart');

Route::get('cart',[CartController::class,'index'])->name('cart');

Route::get('test',[HomeController::class,'test']);

Route::match(['GET','POST'],'remove',[CartController::class,'removeRoomFromCart'])->name('remove');



Route::match(['GET','POST'],'/handle-payment', [PaypalController::class,'handlePayment'])->name('make.payment');
Route::get('/cancel-payment', [PaypalController::class,'paymentCancel'])->name('cancel.payment');
Route::get('/payment-success', [PaypalController::class,'paymentSuccess'])->name('success.payment');




Route::post('send',[HomeController::class,'sendMessage'])->name('send');



Route::get('/guestform',[HomeController::class,'paymentform'])->name('form');
Route::match(['GET','POST'],'/guestsform',[HomeController::class,'submitpaymentform'])->name('form1');
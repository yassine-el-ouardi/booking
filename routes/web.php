<?php

use App\Http\Controllers\HomeController;
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
});

Route::get('room',[HomeController::class,'roomdetails']);

Route::get('rooms',[HomeController::class,'rooms']);
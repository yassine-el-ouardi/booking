<?php

use App\Models\City;
use App\Models\Guest;
use App\Models\Reservationguest;
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

Route::get('/', function () {
    return view('main.index');
});

Route::get('/hotels', function () {
    return view('main.hotels');
});

Route::get('/admin1',function(){
    return view('admin.index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


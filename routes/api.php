<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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



Route::get('hotels', [ApiController::class, 'listHotelsInCity']);

Route::get('hotels2', [ApiController::class, 'listHotelsInCity2']);

Route::get('allhotels', [ApiController::class, 'listAllHotels']);

Route::get('cities', [ApiController::class, 'getCities']);

Route::get('room', [ApiController::class, 'RoomsFromHotel']);

Route::get('city', [ApiController::class, 'listcity']);
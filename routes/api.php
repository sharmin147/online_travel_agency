<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookingController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('booking/{uid}',[BookingController::class,'index']);
Route::get('booking_single/{id}',[BookingController::class,'show']);
//Route::resource('booking',App\Http\Controllers\Api\BookingController::class)->only(['index','store','show','update','destroy']);

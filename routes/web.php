<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\http\Controllers\HomeController;
use App\http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\CustomerController as customer;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\FlightCategoryController;
use App\Http\Controllers\Backend\FlightClassController;
use App\Http\Controllers\Backend\BookingControllerController;
use App\Http\Controllers\Backend\SeatController;
use App\Http\Controllers\Backend\FlightSegmentController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\AirplaneController;
use App\Http\Controllers\Backend\CityController;

use App\Http\Controllers\Backend\AirplaneController;
use App\Http\Controllers\Backend\CityController;

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('pages',[HomeController::class,'pages'])->name('pages');
Route::get('service',[HomeController::class,'service'])->name('service');
Route::get('testimonial',[HomeController::class,'testimonial'])->name('testimonial');
Route::get('destination',[HomeController::class,'destination'])->name('destination');
Route::get('tour',[HomeController::class,'tour'])->name('tour');

Route::get('register', [auth::class,'signUpForm'])->name('register');
Route::post('register', [auth::class,'signUpStore'])->name('register.store');
Route::get('login', [auth::class,'signInForm'])->name('login');
Route::post('login', [auth::class,'signInCheck'])->name('login.check');

Route::get('logout', [auth::class,'signOut'])->name('logOut');
Route::middleware(['checkauth'])->prefix('admin')->group(function(){
Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
});
Route::middleware(['checkrole'])->prefix('admin')->group(function(){
Route::resource('user', user::class);
Route::resource('role', role::class);
Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
});
// Route::get('/', function () {
//     return view('layouts.home');
// });
Route::resource('customers', customer::class);
Route::resource('flight_category', FlightCategoryController::class);
Route::resource('flight_class', FlightClassController::class);
Route::resource('bookings',BookingControllerController::class);
Route::resource('seats',SeatController::class);
Route::resource('flight_segment',FlightSegmentController::class);
Route::resource('payment',PaymentController::class);

// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');







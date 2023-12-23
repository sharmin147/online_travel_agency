<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\CustomerController as customer;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\FlightCategoryController;
use App\Http\Controllers\Backend\FlightClassController;
use App\Http\Controllers\Backend\BookingController as adminbooking;
use App\Http\Controllers\Backend\SeatController;
use App\Http\Controllers\Backend\FlightSegmentController;
use App\Http\Controllers\Backend\FlightRouteController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\AirplaneController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\AirplaneSeatController;
use App\Http\Controllers\Backend\AriportController;
use App\Http\Controllers\Backend\FlightPriceController;
/* user part */
use App\Http\Controllers\frontenduser\AuthController;
use App\Http\Controllers\frontenduser\DashboardController;
use App\Http\Controllers\frontenduser\BookingController as userbooking;
use App\Http\Controllers\frontenduser\FrontPaymentController as userpayment;


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
// frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('pages',[HomeController::class,'pages'])->name('pages');
Route::get('service',[HomeController::class,'service'])->name('service');
Route::get('testimonial',[HomeController::class,'testimonial'])->name('testimonial');
Route::get('destination',[HomeController::class,'destination'])->name('destination');
Route::get('tour',[HomeController::class,'tour'])->name('tour');


// backend
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
    Route::resource('customers', customer::class);
    Route::resource('flight_category', FlightCategoryController::class);
    Route::resource('flight_class', FlightClassController::class);
    Route::resource('bookings',adminbooking::class);
    Route::resource('seats',SeatController::class);
    Route::resource('flight_segment',FlightSegmentController::class);
    Route::resource('flight_route',FlightRouteController::class);
    Route::resource('payment',PaymentController::class);
    Route::resource('airplanes',AirplaneController::class);
    Route::resource('city',CityController::class);
    Route::resource('airplane_seats',AirplaneSeatController::class);
    Route::resource('ariports',AriportController::class);
    Route::resource('flight_prices',FlightPriceController::class);
});
// Route::get('/', function () {
//     return view('layouts.home');
// });

// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');




// frontend user
Route::get('frontenduser/register', [AuthController::class, 'signUpForm'])->name('frontenduser.auth.register');
Route::post('frontenduser/register', [AuthController::class, 'signUpStore'])->name('frontenduser.auth.register.store');
Route::get('frontenduser/login', [AuthController::class,'signInForm'])->name('frontenduser.auth.login');
Route::post('frontenduser/login', [AuthController::class,'signInCheck'])->name('frontenduser.auth.login.check');
Route::get('frontenduser/logout', [AuthController::class,'signOut'])->name('frontenduser.auth.logout');

Route::middleware(['checkuser'])->prefix('user')->group(function(){
    Route::get('dashboard', [DashboardController::class,'index'])->name('user.dashboard');
    Route::resource('user-booking',userbooking::class);
    Route::get('flight_search', [userbooking::class,'flight_search'])->name('flight_search');
    Route::get('flight_seat_search', [userbooking::class,'flight_seat_search'])->name('flight_seat_search');
    Route::resource('user-payment',userpayment::class);
});


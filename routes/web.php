<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Site;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Auth
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login',[Auth::class,'logout'])->name('login');

// ********************Site*************************************
Route::get('/',[Site::class,'index']);
Route::get('/offers',[Site::class,'offers'])->name('Offers');
// ************************************************************
Route::resource('/Dashboard', DashboardController::class);
Route::get('/Dashboardsearch',[DashboardController::class,'search']);

Route::resource('/Auth', Auth::class,);

Route::get('/forgotpassword', function () {
    return view('forgot');
});
Route::resource('/Client', ClientController::class);
Route::get('/Clientsearch',[ClientController::class,'search']);


Route::resource('/Car', CarController::class);
Route::get('/Carsearch',[CarController::class,'search']);


Route::resource('/Driver', DriverController::class);


Route::resource('/Reservation',ReservationController::class );

Route::resource('/Offer',OffersController::class );

Route::resource('/settings',SettingController::class);

Route::get('/logout',[Auth::class,'logout']);

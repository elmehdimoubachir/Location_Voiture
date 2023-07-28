<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('/Dashboard', DashboardController::class);

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/forgotpassword', function () {
    return view('forgot');
});
Route::resource('/Client', ClientController::class);


Route::resource('/Car', CarController::class);


Route::resource('/Driver', DriverController::class);


Route::resource('/Reservation',ReservationController::class );

Route::resource('/settings',SettingController::class);

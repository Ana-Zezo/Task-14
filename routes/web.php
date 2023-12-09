<?php

use App\Http\Controllers\Admin\booking\BookingController;
use App\Http\Controllers\Admin\contact\ContactController;
use App\Http\Controllers\Admin\doctor\DoctorController;
use App\Http\Controllers\Admin\home\HomeController;
use App\Http\Controllers\Admin\major\MajorController;
use App\Http\Controllers\Admin\profile\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get("/", function () {
    return view("admin.pages.home.index");
});
Route::resource("/home", HomeController::class)->only("index");
Route::resource("/major", MajorController::class)->only("index", "show");
Route::resource("booking", BookingController::class)->only("index");
Route::resource("contact", ContactController::class)->only("index");
Route::resource("doctor", DoctorController::class)->only("index", "show");
Route::resource("profile", ProfileController::class)->only("index");
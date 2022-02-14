<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controller\AdminController;
use App\Http\Controller\MenuController;
use App\Http\Controller\ReservationController;

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


//Home
Route::get('', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/redirects', [App\Http\Controllers\HomeController::class, 'redirects']);

//User
Route::get("/users",[App\Http\Controllers\AdminController::class,"user"]);

Route::get("/deleteuser/{id}",[App\Http\Controllers\AdminController::class,"deleteuser"]);

//About
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']);

//Food&Menu
Route::get("/foodmenu",[App\Http\Controllers\AdminController::class,"foodmenu"]);

Route::post("/uploadfood",[App\Http\Controllers\AdminController::class,"upload"]);

Route::get("/deletemenu/{id}",[App\Http\Controllers\AdminController::class,"deletemenu"]);

Route::get("/updateview/{id}",[App\Http\Controllers\AdminController::class,"updateview"]);

Route::post("/update/{id}",[App\Http\Controllers\AdminController::class,"update"]);

//Reservation
Route::post('/reservation', [App\Http\Controllers\AdminController::class, 'reservation']);

Route::get("/reservation",[App\Http\Controllers\ReservationController::class,"reservation"]);

Route::get("/viewreservation",[App\Http\Controllers\AdminController::class,"viewreservation"]);

//Cart
Route::post("/addcart/{id}",[App\Http\Controllers\HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[App\Http\Controllers\HomeController::class,"showcart"]);

Route::get("/remove/{id}",[App\Http\Controllers\HomeController::class,"remove"]);

//Order
Route::post("/orderconfirm",[App\Http\Controllers\HomeController::class,"orderconfirm"]);

Route::get("/orders",[App\Http\Controllers\AdminController::class,"orders"]);

Route::get("/search",[App\Http\Controllers\AdminController::class,"search"]);

//
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

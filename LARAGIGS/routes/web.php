<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use Illuminate\Queue\Console\ListenCommand;

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

//show all listings form
Route::get('/', [ListingController::class, 'index']);

//show create new listing form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//show edit listing form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//manage listings form
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//show single listing form
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//show registration form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

//store new user
Route::post('/users', [userController::class, 'store'])->middleware('guest');

//log user out
Route::post('/logout', [userController::class, 'logout'])->middleware('auth');

//show login form
Route::get('/login', [userController::class, 'login'])->name('login')->middleware('guest');

//log user in
Route::post('/users/authenticate', [userController::class, 'authenticate']);
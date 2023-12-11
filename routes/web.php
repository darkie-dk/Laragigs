<?php

use App\Models;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//all listings
Route::get('/', [ListingController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//show edit form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//update
Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//manage listings
route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//show register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create users
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

//logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

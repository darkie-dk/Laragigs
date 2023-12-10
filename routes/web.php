<?php

use App\Models;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
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
Route::get('/listings/create', [ListingController::class, 'create']);

//store listing data
Route::post('/listings', [ListingController::class, 'store']);

//show edit form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);

//update
Route::put('/listing/{listing}', [ListingController::class, 'update']);

//delet
Route::delete('/listing/{listing}', [ListingController::class, 'destroy']);

//single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);
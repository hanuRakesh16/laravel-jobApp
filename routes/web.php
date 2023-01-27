<?php

use App\Models\Listing;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
// All listing
Route::get('/', [ListingController::class, 'index']);
// post creation
Route::get('/listings/create', [ListingController::class, 'create']);
// store listing
Route::post('/listings', [ListingController::class, 'store']);
// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
// update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);
// delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
// edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
// register form
Route::get('/register', [UserController::class, 'create']);
// create new user
Route::post('/users', [UserController::class, 'store']);
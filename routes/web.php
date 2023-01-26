<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

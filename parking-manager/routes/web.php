<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingController;

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

Route::get('/', [ParkingController::class, 'index'])->name('index');
Route::get('/new-parking', [ParkingController::class, 'new'])->name('new');
Route::get('/current-parkings', [ParkingController::class, 'current'])->name('current');
Route::get('/search-parking', [ParkingController::class, 'search'])->name('search');
Route::post('/show-search', [ParkingController::class, 'show'])->name('show-search');
Route::post('/store', [ParkingController::class, 'store'])->name('store');
Route::post('/destroy/{id}', [ParkingController::class, 'destroy'])->name('destroy');
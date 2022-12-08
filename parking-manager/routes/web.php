<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\UserController;

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

Route::controller(ParkingController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/new-parking', 'new')->name('new');
    Route::get('/current-parkings', 'current')->name('current');
    Route::get('/search-parking', 'search')->name('search');
    Route::post('/show-search', 'show')->name('show-search');
    Route::post('/store', 'store')->name('store');
    Route::put('/store-assigment', 'storeAssigment')->name('store-assigment');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

Route::get('/new-user', [UserController::class, 'newUser'])->name('new-user');
Route::get('/assign-user', [UserController::class, 'assignUser'])->name('assign-user');
Route::post('/store-user', [UserController::class, 'storeUser'])->name('store-user');

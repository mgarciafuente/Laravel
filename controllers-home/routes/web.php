<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MainController;
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


Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::post('/main', 'main')->name('main');
});


Route::controller(FormController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/insert-age', 'ageAnonymous')->name('age');
    Route::post('/insert-age', 'ageRequest')->name('age');
});
<?php

use App\Http\Controllers\CarController;
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

Route::get('/', [CarController::class, 'index'])->name('home');
Route::get('/new-car', [CarController::class, 'new'])->name('new');
Route::get('/search', [CarController::class, 'search'])->name('search');
Route::post('show', [CarController::class, 'show'])->name('show');
Route::post('/delete/{id}',  [CarController::class, 'delete'])->name('delete');
Route::post('/store', [CarController::class, 'store'])->name('store');

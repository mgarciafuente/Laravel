<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DirectionController;

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

Route::view('/', ('home'))->name('home');

Route::get('/insert-user', [UsuarioController::class, 'index'])->name('insert-user');
Route::post('/store-usuario', [UsuarioController::class, 'store'])->name('store-usuario');

Route::get('/insert-direction', [DirectionController::class, 'index'])->name('insert-direction');
Route::post('/store-direction', [DirectionController::class, 'store'])->name('store-direction');
Route::get('/assign-direction', [DirectionController::class, 'assign'])->name('assign-direction');
Route::put('/store-direction-assigment', [DirectionController::class, 'storeAssigment'])->name('store-direction-assigment');

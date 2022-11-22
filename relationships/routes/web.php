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

Route::get('/', function () {
    return redirect('insert-user');
});

Route::get('/insert-user', [UsuarioController::class, 'index'])->name('insert-user');
Route::put('/store-usuario', [UsuarioController::class, 'store'])->name('store-usuario');

Route::get('/insert-direction', [DirectionController::class, 'index'])->name('insert-direction');
Route::put('/store-direction', [DirectionController::class, 'store'])->name('store-direction');

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

Route::controller(UsuarioController::class)->group(function() {
    Route::get('/usuarios', 'index')->name('usuarios');
    Route::get('/insert-usuario', 'insert')->name('insert-usuario');
    Route::post('/store-usuario', 'store')->name('store-usuario');
    Route::post('/edit-usuario/{usuario}', 'edit')->name('edit-usuario');
    Route::put('/update-usuario', 'update')->name('update-usuario');
});

Route::controller(DirectionController::class)->group(function() {
    Route::get('/insert-direction', 'index')->name('insert-direction');
    Route::post('/store-direction', 'store')->name('store-direction');
    Route::get('/assign-direction', 'assign')->name('assign-direction');
    Route::put('/store-direction-assigment', 'storeAssigment')->name('store-direction-assigment');
});

Route::controller(PostController::class)->group(function() {
    Route::get('/insert-post', 'index')->name('insert-post');

});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemaController;

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
    Route::put('/update-usuario/{usuario}', 'update')->name('update-usuario');

    Route::delete('/destroy-usuario/{usuario}', 'destroy')->name('destroy-usuario');
});

Route::controller(DirectionController::class)->group(function() {
    Route::get('/directions', 'index')->name('directions');

    Route::get('/insert-direction', 'insert')->name('insert-direction');
    Route::post('/store-direction', 'store')->name('store-direction');

    Route::post('/edit-direction/{direction}', 'edit')->name('edit-direction');
    Route::put('/update-direction/{direction}', 'update')->name('update-direction');

    Route::get('/assign-direction', 'assign')->name('assign-direction');
    Route::put('/store-direction-assigment', 'storeAssigment')->name('store-direction-assigment');

    Route::delete('/destroy-direction/{direction}', 'destroy')->name('destroy-direction');
});

Route::controller(PostController::class)->group(function() {
    Route::get('/posts', 'index')->name('posts');

    Route::get('/insert-post', 'insert')->name('insert-post');
    Route::post('/store-post', 'store')->name('store-post');

    Route::delete('/destroy-post/{post}', 'destroy')->name('destroy-post');
});

Route::controller(TemaController::class)->group(function() {
    Route::get('/temas', 'index')->name('temas');

    Route::get('/insert-tema', 'insert')->name('insert-tema');
    Route::post('/store-tema', 'store')->name('store-tema');

    Route::delete('/destroy-tema/{tema}', 'destroy')->name('destroy-tema');
});

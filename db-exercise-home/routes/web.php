<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\MountainController;
Use App\Http\Controllers\ShowMountains1;
Use App\Http\Controllers\ShowMountains2;

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
    return view('welcome');
});

Route::get('/', [MountainController::class, 'index']);
Route::get('/tallest-in-europe', [MountainController::class, 'max']);
Route::get('/show/{id}', [MountainController::class, 'show']);
Route::get('/show-mountains1', ShowMountains1::class);
Route::get('/show-mountains2', ShowMountains2::class);
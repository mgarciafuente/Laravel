<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index'])->name('index');
Route::get('/new-task', [TaskController::class, 'new'])->name('new');
Route::get('/current-tasks', [TaskController::class, 'current'])->name('current');
Route::get('/search-task', [TaskController::class, 'search'])->name('search');
Route::post('/show-search', [TaskController::class, 'show'])->name('show-search');
Route::post('/store', [TaskController::class, 'store'])->name('store');
Route::get('/destroy/{id}', [TaskController::class, 'destroy'])->name('destroy');


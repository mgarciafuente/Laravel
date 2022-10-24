<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TasksController;

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

//Route::get('/products', ProductController::class);


Route::get('/tasks/show/{id}', [TasksController::class, 'show']);

Route::get('/tasks/store', function () {
    return view('tasks.store');
});

//Route::view('tasks/store', 'tasks.store');  //same as previous

Route::post('/tasks/store', [TasksController::class, 'store']);

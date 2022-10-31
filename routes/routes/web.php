<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;


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


// Routes without controllers

/* Route::get('/', function () {
    return view('home');
})->name('home.index');

Route::view('/contact', 'contact')->name('home.contact');
Route::view('/recent-posts/{days_ago}', 'recent-posts')->name('posts.recientes.index');
Route::view('/posts/{id}', 'posts')->name('posts.show'); */


// Routes with controllers

/* Route::get('/', [MainController::class, 'index'])->name('posts');
Route::get('/contact', [MainController::class, 'contact'])->name('posts');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts');
Route::get('recent-posts/{days-ago}', [PostController::class, 'showRecent'])->name('recent-posts'); */


// Routes grouped by controllers

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/contact', 'contact')->name('home.contact');
});

Route::controller(PostController::class)->group(function () {
    Route::get('/posts/{id}', 'show')->name('posts');
    Route::get('/recent-posts/{days_ago}', 'showRecent')->name('recent-posts');
});

// Views exercise

Route::get('/anonymous', function () {
    $variable = "valor";
    return view('anonymous', ['variable' => $variable]);
});

Route::get('/anonymousArray', function () {
    $variableArray = ["valor1", "valor2", "valor3", "valor4", "valor5"];
    return view('anonymousArray')->with(['variableArray' => $variableArray]);
});

Route::get('/anonymousArrayWithId', function () {
    $variableArray = ["valor1", "valor2", "valor3", "valor4", "valor5"];
    $id = 2;
    return view('anonymousArrayWithId')->with(['variableArray' => $variableArray, 'id' => $id]);
});
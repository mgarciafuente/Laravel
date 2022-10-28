<?php

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

Route::get('/', function () {
    return view('home');
})->name('home.index');

Route::view('/contact', 'contact')->name('home.contact');
Route::view('/recent-posts/{days_ago}', 'recent-posts')->name('posts.recientes.index');
Route::view('/posts/{id}', 'posts')->name('posts.show');

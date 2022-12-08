<?php

use Illuminate\Support\Facades\Route;
use App\Models\Parking;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('users', function() {
    $query = User::with('parkings')->orderBy('lastname', 'asc')->get();
    return $query->toJson(); // neccesary toJson() ??
});

Route::get('users/{id}', function($id) {
    return User::find($id);
});

Route::get('parkings', function() {
    return Parking::orderBy('created_at', 'desc')->limit(10)->get();
});
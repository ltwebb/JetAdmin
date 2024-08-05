<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthGates;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
Route::resource('posts', PostController::class);
});


Route::group(['middleware' => 'auth'], function () {

    Route::resource('users', UserController::class);
});

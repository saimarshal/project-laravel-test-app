<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/remote-users', [UserController::class, 'getRemoteUsers']);

Route::get('/remote-users-2', [UserController::class, 'getRemoteUsers']);
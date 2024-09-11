<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::POST('/register', [userController::class, 'register']);

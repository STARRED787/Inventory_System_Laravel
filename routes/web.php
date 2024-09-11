<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', ItemController::class);




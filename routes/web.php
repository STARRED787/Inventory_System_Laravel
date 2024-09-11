<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', function () {
    return view('items');
});


Route::resource('items', ItemController::class);

// Route to display the edit form
Route::get('/items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');

// Route to handle the update request
Route::put('/items/{id}', [ItemController::class, 'update'])->name('items.update');




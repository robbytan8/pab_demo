<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('starter');
});
Route::get('/home', [CategoryController::class, 'index']);

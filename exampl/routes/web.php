<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

// Your routes here
Route::get('/', [FirstController::class, 'Home']);
Route::get('/first', [FirstController::class, 'One']);
Route::get('/second', [FirstController::class, 'Two']);


 
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/hello',[HelloController::class,'index']);
Route::post('/hello',[HelloController::class,'post']);
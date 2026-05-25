<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class,"renderWelcome"]);
Route::get('/login', [AuthController::class,"renderLogin"]);
Route::get('/registration', [AuthController::class,"renderRegistration"]);
Route::get('/dashboard', [AuthController::class,"renderDashboard"]);



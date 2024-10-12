<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', 
[LoginController::class, 'index']
);
Route::get('/registration', 
[RegistrationController::class, 'index']
);

<?php

use App\Http\Controllers\ApiV1\MyFleetController;
use App\Http\Controllers\ApiV1\UserController;
use App\Http\Controllers\GetEmailVerifiedScreen;
use Illuminate\Support\Facades\Route;

Route::post('/register', [UserController::class, 'register']);

Route::get('/email/verify/{id}/{hash}', [UserController::class, 'emailVerifiaction'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/my-fleet', [MyFleetController::class, 'index']);
});

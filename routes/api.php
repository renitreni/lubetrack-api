<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Support\Facades\Route;

Route::post('/tokens/create', [LoginController::class, 'authenticate']);

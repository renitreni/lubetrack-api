<?php

use App\Http\Controllers\GetEmailVerifiedScreen;
use Illuminate\Support\Facades\Route;

Route::get('/verified', GetEmailVerifiedScreen::class);
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetEmailVerifiedScreen extends Controller
{
    public function __invoke()
    {
        return view('email_verified');
    }
}

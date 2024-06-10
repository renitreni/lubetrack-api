<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginAuthRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(LoginAuthRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $token = $request->user()->createToken($request->email, ['*'], now()->addWeek());

            return $this->ok(['token' => $token->plainTextToken]);
        }

        return $this->error(['message' => 'Wrong username/password combination.'], 401);
    }
}

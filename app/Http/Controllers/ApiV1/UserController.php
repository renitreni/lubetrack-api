<?php

namespace App\Http\Controllers\ApiV1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiV1\UserRegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $this->ok($request->user());
    }

    public function register(UserRegisterRequest $request, User $user)
    {
        $user->fill($request->validated());
        $user->save();

        event(new Registered($user));

        return $this->ok();
    }

    public function emailVerifiaction(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return $this->ok();
    }
}

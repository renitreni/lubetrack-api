<?php

namespace App\Http\Requests\ApiV1;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:225'],
            'email' => ['required', 'max:200', 'unique:users,email'],
            'phone_no' => ['required', 'max:15', 'unique:users,phone_no'],
            'password' => ['required', 'max:80', 'confirmed']
        ];
    }
}

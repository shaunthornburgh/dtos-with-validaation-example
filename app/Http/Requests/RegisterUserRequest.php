<?php

namespace App\Http\Requests;

use App\DTO\RegisterUserDTO;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email|email',
            'password' => 'required|string'
        ];
    }

    public function data(): RegisterUserDTO
    {
        return new RegisterUserDTO(
            $this->validated('name'),
            $this->validated('email'),
            $this->validated('password'),
        );
    }
}

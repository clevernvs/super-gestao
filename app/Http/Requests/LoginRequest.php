<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'usuario' => 'required|email',
            'senha' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'usuario.required' => 'O E-mail é obrigatório.',
            'usuario.email' => 'O E-mail é inválido.',
            'senha.required' => 'A Senha é obrigatória.',
        ];
    }
}

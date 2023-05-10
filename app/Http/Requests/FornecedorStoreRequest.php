<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|min:3',
            'site' => 'required',
            'uf' => 'required|size:2',
            'email' => 'required|email',
        ];
    }

    public function messages(): array
    {
        return [
            'nome' => [
                'required' => 'O nome é obrigatório.',
                'min' => 'O Nome está inválido.',
            ],
            'site' => [
                'required' => 'O Site é obrigatório.',
            ],
            'uf' => [
                'required' => 'O Estado é obrigatório.',
                'size' => 'O Estado está inválido.',
            ],
            'email' => [
                'required' => 'O E-mail é obrigatório.',
                'email' => 'O E-mail está inválido.',
            ]
        ];
    }
}

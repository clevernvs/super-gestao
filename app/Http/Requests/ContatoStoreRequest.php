<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoStoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'string|min:3|max:50|required',
            'telefone' => 'string|min:10|max:11|required',
            'email' => 'email|required',
            'motivo_contato_id' => 'required',
            'mensagem' => 'text|min:3|required',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O Nome é obrigatório.',
            'nome.min' => 'O Nome está inválido.',
            'telefone.required' => 'O Telefone é obrigatório.',
            'nome.min' => 'O Telefone está inválido.',
            'email.required' => 'O E-mail é obrigatório.',
            'nome.min' => 'O E-mail está inválido.',
            'motivo_contato_id.required' => 'O Motivo do Contato é obrigatório.',
            'mensagem.required' => 'A mensagem é obrigatória.',
        ];
    }
}

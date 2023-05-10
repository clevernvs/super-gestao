<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3',
            'descricao' => 'required|string|min:3',
            'peso' => 'required|integer',
            'unidade_medida_id' => 'exists:unidades,id',
        ];
    }

    public function messages(): array
    {
        return [
            'nome' => [
                'required' => 'O campo Nome é obrigatório',
                'string' => 'O campo Nome está inválido.',
                'min' => 'O campo Nome está inválido.'
            ],
            'descricao' => [
                'required' => 'O campo Descrição é obrigatório.',
                'string' => 'O campo Descrição está inválido.',
                'min' => 'O campo Descrição está inválido.'
            ],
            'peso' => [
                'required' => 'O campo Peso é obrigatório.',
                'integer' => 'O campo Peso está inválido.',
            ],
            'unidade_medida_id' => [
                'exists' => 'O campo Unidade está inválida.'
            ],
        ];
    }
}

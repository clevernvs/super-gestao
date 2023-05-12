<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            'fornecedor_id' => 'exists:fornecedores,id',
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
            'fornecedor_id' => [
                'exists' => 'O campo Fornecedor está inválido.'
            ],
        ];
    }
}

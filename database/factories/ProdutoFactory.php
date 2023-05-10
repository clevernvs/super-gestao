<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'descricao' => fake()->text(),
            'peso' => fake()->numberBetween(1, 50),
            'unidade_medida_id' => fake()->numberBetween(1, 3),
            'preco_venda' => fake()->randomFloat(8, 8, 2),
        ];
    }
}

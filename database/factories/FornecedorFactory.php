<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fornecedor>
 */
class FornecedorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'site' => fake()->domainName(),
            'uf' => fake()->stateAbbr(),
            'email' => fake()->email(),
        ];
    }
}

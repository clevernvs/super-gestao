<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'telefone' => fake()->numberBetween(1000000000, 99999999999),
            'email' => fake()->email(),
            'motivo_contato_id' => fake()->numberBetween(1, 3),
            'mensagem' => fake()->text(100),
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\UnidadeMedida;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadeMedidaSeeder extends Seeder
{
    public function run(): void
    {
        UnidadeMedida::create(['descricao' => 'Kg']);
        UnidadeMedida::create(['descricao' => 'L']);
        UnidadeMedida::create(['descricao' => 'Ml']);
    }
}

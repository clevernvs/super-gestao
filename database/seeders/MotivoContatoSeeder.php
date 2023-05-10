<?php

namespace Database\Seeders;

use App\Models\MotivoContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{

    public function run(): void
    {
        MotivoContato::create(['titulo' => 'Dúvida']);
        MotivoContato::create(['titulo' => 'Elogio']);
        MotivoContato::create(['titulo' => 'Reclamação']);
    }
}

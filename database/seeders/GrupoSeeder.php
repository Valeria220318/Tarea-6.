<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'nombre' => 'Principiante',
        ]);

        Grupo::create([
            'nombre' => 'Intermedio',
        ]);

        Grupo::create([
            'nombre' => 'Avanzado',
        ]);
    }
}


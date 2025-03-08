<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursosSeeder extends Seeder
{
    public function run()
    {
        // Genera 100 cursos
        \App\Models\Curso::factory(100)->create();
    }
}


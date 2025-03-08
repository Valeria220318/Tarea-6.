<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsuarioSeeder::class,
            KitSeeder::class,
        ]);

        // Generar 100 cursos usando la fábrica
        Curso::factory(100)->create();
    }
}



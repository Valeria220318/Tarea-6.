<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaterialDidactico;

class MaterialDidacticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaterialDidactico::create([
            'nombre' => 'Libro de Robótica',
            'descripcion' => 'Libro básico de introducción a la robótica.',
            'curso_id' => 1, 
        ]);

        MaterialDidactico::create([
            'nombre' => 'Manual de Automatización',
            'descripcion' => 'Manual avanzado de automatización.',
            'curso_id' => 2, 
        ]);

        MaterialDidactico::create([
            'nombre' => 'Guía de Programación',
            'descripcion' => 'Guía avanzada para programación en robótica.',
            'curso_id' => 3, 
        ]);

        MaterialDidactico::create([
            'nombre' => 'Características de los Robots',
            'descripcion' => 'Material didáctico sobre las características de los robots.',
            'curso_id' => 4, 
        ]);
    }
}


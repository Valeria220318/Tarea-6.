<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kit;

class KitSeeder extends Seeder
{
    public function run()
    {
        Kit::create([
            'nombre' => 'Kit Básico de Robótica',
            'descripcion' => 'Kit ideal para comenzar con proyectos básicos de robótica.',
            'precio' => 500.00
        ]);

        Kit::create([
            'nombre' => 'Kit Avanzado de Robótica',
            'descripcion' => 'Kit con componentes avanzados para proyectos complejos de robótica.',
            'precio' => 1500.00
        ]);

        Kit::create([
            'nombre' => 'Kit Educativo de Robótica',
            'descripcion' => 'Kit especialmente diseñado para educación en robótica para estudiantes.',
            'precio' => 800.00
        ]);
    }
}



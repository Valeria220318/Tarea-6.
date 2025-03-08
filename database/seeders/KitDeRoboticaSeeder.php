<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KitDeRobotica;

class KitDeRoboticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KitDeRobotica::create([
            'nombre' => 'StarterKit',
            'descripcion' => 'Kit básico para iniciarse en la robótica.',
        ]);

        KitDeRobotica::create([
            'nombre' => 'Educational Robotics Kit',
            'descripcion' => 'Kit educativo avanzado para robótica.',
        ]);

        KitDeRobotica::create([
            'nombre' => 'Kit5',
            'descripcion' => 'Kit especializado en características robóticas avanzadas.',
        ]);
    }
}


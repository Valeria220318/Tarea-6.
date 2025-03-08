<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'titulo' => 'Introduction to Robotics',
            'caratula' => 'starter_kit.jpg',
            'contenido' => 'Curso introductorio a la robótica.',
            'kit_robotica_id' => 1, 
        ]);

        Curso::create([
            'titulo' => 'Introduction to Automation',
            'caratula' => 'starter_kit.jpg',
            'contenido' => 'Curso introductorio a la automatización.',
            'kit_robotica_id' => 1,
        ]);

        Curso::create([
            'titulo' => 'Programming for Robotics',
            'caratula' => 'educational_kit.jpg',
            'contenido' => 'Curso de programación para robótica.',
            'kit_robotica_id' => 2, 
        ]);

        Curso::create([
            'titulo' => 'Characteristics of a Robot',
            'caratula' => 'kit5.jpg',
            'contenido' => 'Características fundamentales de los robots.',
            'kit_robotica_id' => 3, 
        ]);
    }
}


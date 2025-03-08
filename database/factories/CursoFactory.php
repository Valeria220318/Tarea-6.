<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'nombreCurso' => $this->faker->sentence(3), 
            'caratula' => $this->faker->imageUrl(640, 480, 'tech', true), 
            'contenido' => $this->faker->paragraph(), 
            'kitDeRobot' => $this->faker->randomElement(['StarterKit', 'Educational Robotics Kit', 'Kit5']), 
        ];
    }
}



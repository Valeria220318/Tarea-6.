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
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'duracion' => $this->faker->randomNumber(2),
            'precio' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}


<?php

namespace Database\Factories;

use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Generar un nombre para el grupo (ejemplo: 'Principiante')
            'nombre' => $this->faker->randomElement(['Principiante', 'Intermedio', 'Avanzado']),
        ];
    }
}

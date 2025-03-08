<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\MaterialDidactico;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialDidacticoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Generamos un nombre aleatorio para el material didáctico
            'nombre' => $this->faker->sentence(3),

            // Generamos una descripción aleatoria
            'descripcion' => $this->faker->paragraph(),

            // Generamos una URL aleatoria para el material (por ejemplo, un archivo PDF)
            'url' => $this->faker->url(),

            // Asignamos un curso aleatorio para este material didáctico
            'curso_id' => Curso::inRandomOrder()->first()->id,
        ];
    }
}

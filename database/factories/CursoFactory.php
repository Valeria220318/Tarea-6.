<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\KitDeRobotica;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Genera un título aleatorio para el curso
            'titulo' => $this->faker->sentence(3),

            // Genera una carátula de imagen aleatoria (puedes cambiarla a una ruta específica si lo prefieres)
            'caratula' => $this->faker->imageUrl(),

            // Genera un contenido de curso aleatorio
            'contenido' => $this->faker->paragraph(),

            // Genera un kit de robótica aleatorio relacionado con este curso
            // Asegúrate de que el kit de robótica ya exista, por eso usas 'first()' para obtener el primer kit disponible
            'kit_de_robotica_id' => KitDeRobotica::inRandomOrder()->first()->id, 
        ];
    }
}

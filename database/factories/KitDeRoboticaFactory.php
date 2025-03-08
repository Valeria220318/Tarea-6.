<?php

namespace Database\Factories;

use App\Models\KitDeRobotica;
use Illuminate\Database\Eloquent\Factories\Factory;

class KitDeRoboticaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Generar un nombre para el kit
            'nombre' => $this->faker->randomElement(['StarterKit', 'Educational Robotics Kit', 'Kit5']),
            
            // Generar una descripción para el kit
            'descripcion' => $this->faker->sentence(),
            
            // Generar un tipo aleatorio de kit
            'tipo' => $this->faker->randomElement(['StarterKit', 'Educational Robotics Kit', 'Kit5']),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Generar un nombre aleatorio
            'nombre' => $this->faker->name(),
            
            // Generar un correo electrónico aleatorio
            'email' => $this->faker->unique()->safeEmail(),
            
            // Generar un rol aleatorio (puede ser 'estudiante', 'docente' o 'administrativo')
            'rol' => $this->faker->randomElement(['estudiante', 'docente', 'administrativo']),
            
            // Generar una contraseña por defecto
            'password' => bcrypt('secret'), // Contraseña por defecto
        ];
    }
}

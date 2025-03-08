<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear un administrador
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Crear docentes
        User::create([
            'name' => 'Docente 1',
            'email' => 'docente1@example.com',
            'password' => bcrypt('password'),
            'role' => 'docente',
        ]);
        
        User::create([
            'name' => 'Docente 2',
            'email' => 'docente2@example.com',
            'password' => bcrypt('password'),
            'role' => 'docente',
        ]);
        
        // Crear estudiantes
        User::create([
            'name' => 'Estudiante 1',
            'email' => 'estudiante1@example.com',
            'password' => bcrypt('password'),
            'role' => 'estudiante',
        ]);
        
        User::create([
            'name' => 'Estudiante 2',
            'email' => 'estudiante2@example.com',
            'password' => bcrypt('password'),
            'role' => 'estudiante',
        ]);
    }
}


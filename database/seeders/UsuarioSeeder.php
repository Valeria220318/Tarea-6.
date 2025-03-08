<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Administrativo',
        ]);

        User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Profesor',
        ]);

        User::create([
            'name' => 'Estudiante',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Estudiante',
        ]);
    }
}



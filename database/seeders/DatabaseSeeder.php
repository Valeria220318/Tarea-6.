<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Curso;
use App\Models\Grupo;
use App\Models\KitDeRobotica;
use App\Models\MaterialDidactico;
use App\Models\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Llamadas a seeders individuales

        // Llamada a los seeders para poblar las tablas
        $this->call([
            CursoSeeder::class,
            GrupoSeeder::class,
            KitDeRoboticaSeeder::class,
            MaterialDidacticoSeeder::class,
            UsuarioSeeder::class,
        ]);
        
        // También puedes poblar directamente desde aquí si es necesario
        // Ejemplo: Crear un usuario administrador si es necesario
        DB::table('usuarios')->insert([
            'nombre' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'rol' => 'administrativo',
        ]);
    }
}


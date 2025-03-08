<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        // Verificar si la tabla 'usuarios' no existe antes de crearla
        if (!Schema::hasTable('usuarios')) {
            Schema::create('usuarios', function (Blueprint $table) {
                $table->id(); // Clave primaria (usuarioID)
                $table->string('nombre');
                $table->string('email')->unique();
                $table->string('password');
                $table->enum('rol', ['estudiante', 'docente', 'administrativo']);
                $table->unsignedBigInteger('grupo_id'); // Clave foránea (grupoID)

                // Relación con la tabla grupos
                $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade'); // Si se elimina el grupo, se eliminan los usuarios asociados

                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
}






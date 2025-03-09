<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    public function up()
    {
        // Verificar si la tabla 'grupos' no existe antes de crearla
        if (!Schema::hasTable('grupos')) {
            Schema::create('grupos', function (Blueprint $table) {
                $table->id(); // Clave primaria
                $table->string('nombre'); // Nombre del grupo (Ejemplo: principiante, intermedio, avanzado)

                // Clave foránea a la tabla de cursos
                $table->unsignedBigInteger('curso_id');
                $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');

                $table->timestamps();
            });
        }
    }

    // Método down
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}

class Grupo extends Model
{
    use HasFactory;

    // Relación: Un grupo tiene muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }

    // Relación de muchos a muchos: Un grupo tiene muchos cursos
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'grupos_cursos');
    }
}





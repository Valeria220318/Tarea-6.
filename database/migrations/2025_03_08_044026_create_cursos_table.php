<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    public function up()
    {
        // Verificar si la tabla 'cursos' no existe antes de crearla
        if (!Schema::hasTable('cursos')) {
            Schema::create('cursos', function (Blueprint $table) {
                $table->id(); // Clave primaria (cursoID)
                $table->string('nombreCurso');
                $table->string('caratula');
                $table->text('contenido');
                $table->unsignedBigInteger('kitDeRobot_id'); // Relación con la tabla KitsRobotica (clave foránea)

                // Definimos la clave foránea que hace referencia a la tabla kits_robotica
                $table->foreign('kitDeRobot_id')->references('id')->on('kits_robotica')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
}

class Curso extends Model
{
    use HasFactory;

    // Relación de muchos a muchos: Un curso pertenece a muchos grupos
    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupos_cursos');
    }

    // Relación uno a muchos inversa: Un curso pertenece a un kit de robótica
    public function kitDeRobot()
    {
        return $this->belongsTo(KitsRobotica::class, 'kitDeRobot_id');
    }
}






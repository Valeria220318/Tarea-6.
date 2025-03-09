<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitRoboticaTable extends Migration
{
    public function up()
    {
        // Verificar si la tabla 'cursos_kits' no existe antes de crearla
        if (!Schema::hasTable('cursos_kits')) {
            Schema::create('cursos_kits', function (Blueprint $table) {
                $table->unsignedBigInteger('curso_id'); // Clave foránea (cursoID)
                $table->unsignedBigInteger('kit_id');   // Clave foránea (kitID)

                // Relaciones con las tablas correspondientes
                $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade'); 
                $table->foreign('kit_id')->references('id')->on('kits_robotica')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('cursos_kits');
    }
}

class KitsRobotica extends Model
{
    use HasFactory;

    // Relación entre KitsRobotica y Curso
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'kitDeRobot_id');
    }
}



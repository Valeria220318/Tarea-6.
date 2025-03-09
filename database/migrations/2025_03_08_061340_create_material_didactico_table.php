<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialDidacticoTable extends Migration
{
    public function up()
    {
        // Verificar si la tabla 'material_didactico' no existe antes de crearla
        if (!Schema::hasTable('material_didactico')) {
            Schema::create('material_didactico', function (Blueprint $table) {
                $table->id(); // Clave primaria (materialID)
                $table->enum('tipoMaterial', ['tutorial', 'video', 'manual']);
                $table->text('contenido');
                $table->unsignedBigInteger('curso_id'); // Clave foránea (cursoID)

                // Relación con la tabla cursos
                $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade'); 
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('material_didactico');
    }
}

class MaterialDidactico extends Model
{
    use HasFactory;

    // Relación: Un material didáctico pertenece a un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'cursoID');
    }
}




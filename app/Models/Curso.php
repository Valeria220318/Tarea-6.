<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

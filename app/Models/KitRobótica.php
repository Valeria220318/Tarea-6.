<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitsRobotica extends Model
{
    use HasFactory;

    // Relación entre KitsRobotica y Curso
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'kitDeRobot_id');
    }
}

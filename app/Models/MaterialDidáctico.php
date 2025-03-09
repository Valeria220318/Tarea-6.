<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDidactico extends Model
{
    use HasFactory;

    // Relación: Un material didáctico pertenece a un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'cursoID');
    }
}

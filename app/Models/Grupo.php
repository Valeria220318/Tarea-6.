<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

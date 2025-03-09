<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Relación de muchos a muchos: Un curso pertenece a muchos grupos.
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }

    //Relación de uno a muchos: Un curso tiene muchos materiales didácticos.
    public function materiales()
    {
        return $this->hasMany(MaterialDidactico::class);
    }
}

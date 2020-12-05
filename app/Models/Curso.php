<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //protected $table="cursos";
    
    protected $fillable=[
        "name",
        "cantidad_participantes",
        "precio",
        "activo",
        "tipo",
        "user_id",
        "fecha_inicial"
    ];
    protected $casts=[
        "fecha_inicial"=>"date"
    ];
    
}

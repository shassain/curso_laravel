<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $fillable=["nombre","appaterno","apmaterno","fecha_nacimiento","ci","foto"];
    public function cursos(){
        return $this->belongsToMany(Curso::class,"inscripcions","participante_id","curso_id")->withPivot("fecha_de_inscripcion");
    }
}

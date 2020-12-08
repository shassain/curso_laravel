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
    public function creador(){
        return $this->belongsTo(User::class,"user_id","id");//return model
        //belengs To == pertenece a
    }
    public function participantes(){
        return $this->belongsToMany(Participante::class,"inscripcions","curso_id","participante_id")->withPivot("fecha_de_inscripcion");
        //belongs To Many == pertenece a muchos
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\User;
use App\Models\Participante;
class PruebaOrmController extends Controller
{
    public function index(){
        //create, save
        
        /* $curso = Curso::create([
            "name"=>"TDD",
            "cantidad_participantes"=>10,
            "precio"=>200,
            "tipo"=>"privado",
            "user_id"=>1,
            "fecha_inicial"=>now()->toDateString()
        ]);
        dd($curso); 
        $curso = new Curso();
        $curso->name="SASS";
        $curso->cantidad_participantes=10;
        $curso->precio=100;
        $curso->tipo="publico";
        $curso->fecha_inicial=now()->addDay(2)->toDateString();
        $curso->user_id=10;
        $curso->save();
        dd($curso);*/

        //save, para edidtar;
        /* $curso=Curso::findOrFail(9);
        $curso->name="DDD-edit";
        $curso->cantidad_participantes=$curso->cantidad_participantes+1;
        $curso->tipo="privado";
        $curso->save(); */
        

        //delete para eliminar
        /* $curso=Curso::findOrFail(9);
        $curso->delete();
        dd($curso); */
        $cursos=Curso::where("precio",20.2)
                        ->where("fecha_inicial","2020-12-08")
                        ->where("user_id",11);

        $cursos=$cursos->get();
        dd($cursos);
        $ids=[3,5,7,8];
        $users=User::whereIn("id",[3,5,7,8])->get();
        $cursos_de_users=Curso::whereIn("user_id",[3,5,7,8])->get();
        $cursos_top_5=Curso::orderBy("cantidad_participantes","desc")->take(5)->get();
        $cursos_5=Curso::orderBy("cantidad_participantes","asc")->take(3)->get();
        $cursos_beetwen=Curso::whereBetween("fecha_inicial",["2020-12-08","2020-12-10"])->get();
        $curso_firt=$cursos->first();
        dd($curso_firt);
    }
    public function testOrm(){
        $user=User::with(["cursos"=>function($query){
            $query->where("tipo","publico")->where("precio",">=",20);
        }])->findOrFail(11);//with == con
        /* foreach($user->cursos as $curso){

            dump($user->name,$curso->name);
        } */
        //---
        $cursos=Curso::with("creador")->get();
        
        foreach($cursos as $curso){
           // echo $curso->name.", pertenece a:".$curso->creador->name."<br/>";
        }
        $cursos_inscritos=Curso::with("participantes","creador.cursos")->get();
        $participantes_cursos=Participante::with("cursos")->get();
        dd($cursos_inscritos);
    }
}

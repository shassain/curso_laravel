<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Participante;
class IncripcionController extends Controller
{
    public function index(){
        $cursos=Curso::with("participantes")->get();
        
        return view("inscripcion.index",compact("cursos"));
    }
    public function create($id){
        $curso=Curso::with("participantes")->findOrFail($id);
        $actuales=[];
        foreach($curso->participantes as $parti){
            array_push($actuales,$parti->id);
        }
        //[2,3,4,5]
        $participantes=Participante::whereNotIn("id",$actuales)->get();
        return view("inscripcion.create",compact("curso","participantes"));
    }
    public function store(Request $request,$id){
        $curso=Curso::findOrFail($id);
        $curso
        ->participantes()
        ->attach($request->participante_id,["fecha_de_inscripcion"=>now()->toDateString()]);
        return redirect()->route("incripcion.index");
    }
    public function getPdf($curso_id,$partipante_id){
        $pdf = \App::make('dompdf.wrapper');
        $curso=Curso::findOrFail($curso_id);
        $participante=Participante::with(["cursos"=>function($query) use ($curso) {
            $query->where("curso_id",$curso->id);
        }])->findOrFail($partipante_id);
        //$pdf->loadHTML('<h1>Test</h1>');
        $pdf->loadView('inscripcion.pdf',compact("curso","participante"));
        return $pdf->stream();
    }
}

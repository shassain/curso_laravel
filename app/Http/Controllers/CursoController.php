<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\User;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //redirige hacia el index Curso, generalmente se listan los items de curso
        $cursos=Curso::with('creador')->where("activo",true);//QueryBuilder
        if($request->has("precio_inicial") && $request->precio_inicial != ""){
            $cursos=$cursos->where("precio",">=",$request->precio_inicial);
        }
        if($request->has("precio_final") && $request->precio_final != ""){
            $cursos=$cursos->where("precio","<=",$request->precio_final);
        }
        if($request->has("tipo") && $request->tipo != "all"){
            $cursos=$cursos->where("tipo",$request->tipo);
        }
        if($request->has("user_id") && $request->user_id != "all"){
            $cursos=$cursos->where("user_id",$request->user_id);
        }
        $cursos=$cursos->get();
        $usuarios=User::get();
        return view('curso.index',compact('cursos','usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //obtenemos la informacion necesaria para crear un curso y redirigimos.
        $usuarios=User::get();
        return view("curso.create",compact("usuarios"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso=new Curso($request->all());
        $curso->activo=true;
        $curso->cantidad_participantes=0;
        $curso->save();
        //para crear un curso
        //dd($request->all());
        //almacenar lo que tiene request
        //->save()
        return redirect()->route("curso.index")->with(["msn"=>"Curso Creado Exitosamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //buscar el curso y mostrar su informacion.
        $curso=Curso::with("creador","participantes")->findOrFail($id);
        return view("curso.show",compact("curso"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso=Curso::findOrFail($id);
        $usuarios=User::get();
        //buscar al curso, y lo enviamos a otro formulario para su edicion
        return view("curso.edit",compact("curso","usuarios"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $curso=Curso::findOrFail($id);
        $curso->fill($request->all());
        $curso->save();
        //guardar la actualizacion
        //dd($request->all(),$id);
        //->save();
        return redirect()->route("curso.index")->with(["msn"=>"Curso Editado correctamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso=Curso::findOrFail($id);
        $curso->activo=!$curso->activo;
        $curso->save();
        //eliminar un curso.
        //->delete()
        return redirect()->back();
        //return redirect()->route("curso.index",compact("message"));
    }

    public function miaccion($parametro){
        return "mi funcion especifica ".$parametro;
    }
}

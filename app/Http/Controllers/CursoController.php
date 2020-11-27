<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //redirige hacia el index Curso, generalmente se listan los items de curso
        return view('curso.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //obtenemos la informacion necesaria para crear un curso y redirigimos.
        return view("curso.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //para crear un curso
        //dd($request->all());
        //almacenar lo que tiene request
        //->save()
        return redirect()->route("curso.index");
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
        $curso=[
            "name"=>"laravel",
            "valor"=>100
        ];
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
        //buscar al curso, y lo enviamos a otro formulario para su edicion
        $curso=[
            "name"=>"laravel",
            "valor"=>100
        ];
        return view("curso.edit",compact("curso"));
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
        //guardar la actualizacion
        //dd($request->all(),$id);
        //->save();
        return redirect()->route("curso.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar un curso.
        //->delete()
        $message="Dato eliminado";
        return $message;
        //return redirect()->route("curso.index",compact("message"));
    }

    public function miaccion($parametro){
        return "mi funcion especifica ".$parametro;
    }
}

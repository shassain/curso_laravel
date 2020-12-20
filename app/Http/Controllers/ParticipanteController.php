<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participantes=Participante::get();
        return view("participante.index",compact("participantes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("participante.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto=$request->file("foto");
        $participante=new Participante($request->all());
        if($foto!=null){
            $nombre=now()->format("Y-m-d_h_s");
            $nombre.=$foto->getClientOriginalName();
            
            \Storage::disk("local")->put($nombre,\File::get($foto));
        }else{
            $nombre="participante.png";
        }
        $participante->foto=$nombre;//blob
        $participante->save();
        return redirect()->route("participante.index");
    }
    public function getImage($nombre){
        $public_path=public_path();
        $url = $public_path.'/storage/'.$nombre;
        if(\Storage::exists($nombre)){
            return response()->download($url);
        }
        abort(404);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participante=Participante::findOrFail($id);
        return view("participante.show",compact("participante"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

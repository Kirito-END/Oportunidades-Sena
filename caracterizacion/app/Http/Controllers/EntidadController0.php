<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Entidad;
use App\Municipio;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entidades = Entidad::all();
        return view('Entidad.entidades',compact('entidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $municipios=Municipio::all();
        return view('Entidad.registrar',compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entidad = new Entidad;
        $user = Auth::id();
        $entidad ->nombre =$request ->input('nombre') ;
        $entidad ->direccion =$request ->input('direccion') ;
        $entidad ->telefono =$request ->input('telefono') ;
        $entidad ->representante_legal =$request ->input('representante_legal') ;
        $entidad ->mail_contacto =$request ->input('mail_contacto') ;
        $entidad ->tel_contacto =$request ->input('tel_contacto') ;
        $entidad ->municipio_id =$request ->input('municipio_id') ;
        $entidad ->crea_id =$user;
        $entidad ->edita_id =$user;

        $entidad ->save();
        return redirect('/enti')->with('Mensaje', 'Entidad Guardada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidad $entidad)
    {
        $municipios=Municipio::all();
        return view('Entidad.editar',compact('entidad','municipios'));
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
      $entidad =request()->except(['_token','_method','button']);
      Entidad::where('id','=',$id)->update($entidad);
      return redirect('/enti')->with('Mensaje', 'Entidad Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Entidad::destroy($id);
        return redirect('/enti')->with('Mensaje', 'Entidad Eliminada');
    }
}

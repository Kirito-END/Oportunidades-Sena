<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Oportunidad;
use App\TipoOportunidad;
use App\Entidad;
use App\Estado;
use App\User;

class OportunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oportunidades = Oportunidad::all();
        return view('oportunidades.index', compact('oportunidades'));
    }

    public function oportunidadesAsignadas()
    {
        $userId = Auth::id();
        $oportunidades = Oportunidad::where('responsable_id', $userId)->get();
        return view('oportunidades.asignadas', compact('oportunidades'));
    }

    public function misOportunidades()
    {
        $userId = Auth::id();
        $misOportunidades = Oportunidad::where('crea_id',$userId)->get();
        return view('oportunidades.misOportunidades', compact('misOportunidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $tiposOportunidad = TipoOportunidad::all();
        $entidades = Entidad::all();
        $dato = 'registrar';
        return view('oportunidades.crear', compact('tiposOportunidad', 'entidades', 'users', 'dato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cod_oportunidad' => 'required',
            'entidad_id' => 'required',
            'fecha_origen' => 'required',
            'descripcion' => 'required',
            'compromiso_aleado' => 'required',
            'compromiso_centro' => 'required',
            'resultado_relacional' => 'required',
        ]);

        $userId = Auth::id();
        $estado = Estado::where('id', 2)->get();

        Oportunidad::create([
            'crea_id' => $userId,
            'edita_id' => $userId,
            'descripcion' => $request->descripcion,
            'fecha_origen' => $request->fecha_origen,
            'compromiso_aleado' => $request->compromiso_aleado,
            'compromiso_centro' => $request->compromiso_centro,
            'resultado_relacional' => $request->resultado_relacional,
            'entidad_id' => $request->entidad_id,
            'estado_id' => $estado[0]->id,
            'cod_oportunidad' => $request->cod_oportunidad,
        ]);

        return redirect('/misOportunidades')->with('Mensaje' , 'Registro exitoso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposOportunidad = TipoOportunidad::all();
        $entidades = Entidad::all();
        $users = User::all();
        $oportunidad = Oportunidad::findOrFail($id);
        $user = User::where('id',$oportunidad->responsable_id)->get();
        return view('oportunidades.detalle',compact('oportunidad','tiposOportunidad','entidades', 'user', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposOportunidad = TipoOportunidad::all();
        $entidades = Entidad::all();
        $users = User::all();
        $oportunidad = Oportunidad::findOrFail($id);
        $user = User::where('id',$oportunidad->responsable_id)->get();
        $dato = 'actualizar';
        return view('oportunidades.editar',compact('oportunidad','tiposOportunidad','entidades', 'user', 'users', 'dato'));
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
        $userId = Auth::id();
        $oportunidad = Oportunidad::findOrFail($id);

        $request->validate([
            'cod_oportunidad' => 'required',
            'entidad_id' => 'required',
            'fecha_origen' => 'required',
            'descripcion' => 'required',
            'compromiso_aleado' => 'required',
            'compromiso_centro' => 'required',
            'resultado_relacional' => 'required',
        ]);

        Oportunidad::where('id',$id)->update([
            'edita_id' => $userId,
            'responsable_id' => $request->responsable_id,
            'descripcion' => $request->descripcion,
            'fecha_origen' => $request->fecha_origen,
            'compromiso_aleado' => $request->compromiso_aleado,
            'compromiso_centro' => $request->compromiso_centro,
            'resultado_relacional' => $request->resultado_relacional,
            'entidad_id' => $request->entidad_id,
            'cod_oportunidad' => $request->cod_oportunidad,
        ]);

        return redirect('/misOportunidades')->with('Mensaje', 'Actualizacion exitosa!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Oportunidad::destroy($id);
        return redirect('/misOportunidades')->with('Mensaje', 'Eliminacion exitosa!!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Jugador;
use Illuminate\Http\Request;
use App\Http\Requests\JugadorRecuest;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Club::all();
        return view('jugadores.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JugadorRecuest $request)
    {
        $equipo = Club::where('id',request('club'))->first();
        Jugador::create([
            'idEquipo' => request('club'),
            'nombre' => request('name'),
            'edad' => request('age'),
            'equipo' => $equipo->equipo
        ]);
        return redirect()->route('jugador.index')->with('creado','ok');
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
    public function edit(Jugador $id)
    {
        $clubes = Club::all();
    
        $jugadorClub = Club::where('id', $id['idEquipo'])->select('clubes.*')->first();
        $id['nombreEquipo'] = $jugadorClub->equipo;
        $id['liga'] = $jugadorClub->id; 

        return view('jugadores.edit',[
            'jugador' => $id,
            'clubes' => $clubes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Jugador $jugador, JugadorRecuest $request)
    {

        // dd($jugador);
        $equipo = Club::where('id',request('club'))->first();
        $jugador->update([
            'idEquipo' => request('club'),
            'nombre' => request('name'),
            'edad' => request('age'),
            'equipo' => $equipo->equipo
        ]);

        return redirect()->route('jugador.index')->with('actualizado','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugador.index', $jugador)->with('eliminado', 'ok');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Liga;
use Illuminate\Http\Request;
use App\Http\Requests\ClubRequest;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = DB::table('clubes')
        ->join('ligas', 'clubes.idLiga', '=', 'ligas.id')
        ->select('clubes.*', 'ligas.nombre')
        ->get();

        return view('clubes.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ligas = Liga::all();
        return view('clubes.create', compact('ligas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClubRequest $request)
    {   
        
        Club::create([
            'equipo' => request('name'),
            'idLiga' => request('liga')
        ]);
        return redirect()->route('club.index')->with('creado','ok');
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
    public function edit(Club $id)
    {
        $ligas = Liga::all();
        

        $ligaClub = Liga::where('id', $id['idLiga'])->select('ligas.*')->first();
        $id['nombreLiga'] = $ligaClub->nombre;
        // $id['liga'] = $ligaClub->id; 

        return view('clubes.edit',[
            'club' => $id,
            'ligas' => $ligas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Club $club,ClubRequest $request)
    {


        // return request('liga');
        $club->update([
            'equipo' => request('name'),
            'idLiga' => request('liga')
        ]);
    
        return redirect()->route('club.index')->with('actualizado','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        $club->delete();
        return redirect()->route('club.index', $club);
    }
}

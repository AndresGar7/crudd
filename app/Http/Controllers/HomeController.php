<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Jugador;
use App\Models\Liga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index(){

        $datos = DB::table('jugadores')
        ->join('clubes', 'clubes.id','=', 'jugadores.idEquipo')
        ->join('ligas','ligas.id', '=', 'clubes.idLiga')
        ->selectRaw('jugadores.equipo, jugadores.idEquipo, ligas.nombre, COUNT(*) AS num_jugadores')
        ->groupBy('jugadores.equipo','jugadores.idEquipo')
        ->get();

        $clubes = Club::count();
        $jugadores = Jugador::count();

        $ligas = Liga::all();
        return view('welcome', compact('datos', 'ligas','clubes', 'jugadores'));
    }
}

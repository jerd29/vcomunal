<?php

namespace App\Http\Controllers;

use App\RegistroVoto;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroVotoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $votos = DB::table('registro_votos')
        // ->limit(2)
        // ->count('cedula')
        // ->groupBy('estado')
        ->select('estado', DB::raw('count(*) as votos'))
        ->where('fk_eleccion' , '5')
        ->groupBy('estado')
        ->get();
        // return view('reportes.tnacional');

        // $tipoelecciones = TipoEleccion::orderBy('pk_tipo_eleccion', 'ASC')->get();

        // return dd($tipoelecciones);

        return view('reportes.tnacional', compact('votos'));
    }
}

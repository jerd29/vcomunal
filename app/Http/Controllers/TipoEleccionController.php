<?php

namespace App\Http\Controllers;

use App\TipoEleccion;

use Illuminate\Http\Request;

class TipoEleccionController extends Controller
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
        // return view('elecciones');

        $tipoelecciones = TipoEleccion::orderBy('pk_tipo_eleccion', 'ASC')->get();

        // return dd($tipoelecciones);

        return view('tipo_eleccion.index', compact('tipoelecciones'));
    }
}

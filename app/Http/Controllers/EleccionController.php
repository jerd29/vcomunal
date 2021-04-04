<?php

namespace App\Http\Controllers;

use App\Eleccion;

use Illuminate\Http\Request;

class EleccionController extends Controller
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
        // $elecciones = TipoEleccion::with('eleccion')->get();

        $elecciones = Eleccion::orderBy('fecha_eleccion', 'DESC')->get();
        // return dd($elecciones);

        return view('eleccion.index', compact('elecciones'));
    }

}

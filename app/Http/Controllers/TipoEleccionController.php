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

    public function create()
    {

        // return dd(request());

        return view('tipo_eleccion.create');

        // $tipoelecciones = TipoEleccion::orderBy('pk_tipo_eleccion', 'ASC')->get();
        // return view('tipo_eleccion.index', compact('tipoelecciones'));
    }

    public function store()
    {
        request()->validate([
            'tipo_eleccion' => 'required|min:5'
        ]);
        TipoEleccion::create([
            'tipo_eleccion' => request('tipo_eleccion')
        ]);
        
        return redirect()->route('tipo_eleccion.index');
    }

    public function edit(TipoEleccion $tipoeleccion)
    {

        return view('tipo_eleccion.edit', [
            'tipoeleccion' => $tipoeleccion
        ]);
    }

    public function update(TipoEleccion $tipoeleccion)
    {
       $tipoeleccion->update([
           'tipo_eleccion' => request('tipo_eleccion')
       ]);
       
       return redirect()->route('tipo_eleccion.index');
    }

    public function destroy(TipoEleccion $tipoeleccion)
    {

       $tipoeleccion->delete();
       
       return redirect()->route('tipo_eleccion.index');
    }

}

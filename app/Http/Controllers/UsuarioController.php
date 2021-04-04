<?php

namespace App\Http\Controllers;

use App\Usuario;


use Illuminate\Http\Request;

class UsuarioController extends Controller
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

        $usuarios = Usuario::orderBy('id', 'ASC')->get();

        // return dd($tipoelecciones);

        return view('usuarios.index', compact('usuarios'));
    }
}

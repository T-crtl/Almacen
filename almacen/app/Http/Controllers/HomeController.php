<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('home');
    }

    public function resguardo()
    {
        return view('consultas.resguardo');
    }
    public function area()
    {
        return view('consultas.area');
    }
    public function articulo()
    {
        return view('consultas.articulo');
    }
    public function division()
    {
        return view('consultas.division');
    }
    public function traslado()
    {
        return view('consultas.traslado');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trasladoarticulo;
use App\Models\Campus;
use App\Models\Peopledatabase;
use App\Models\Equipo;

class TrasladoArticuloController extends Controller
{
    public function index()
    {
        $traslados = Trasladoarticulo::paginate();

        return view('trasladoArticulo.index', compact('traslados'))
            ->with('i', (request()->input('page', 1) - 1) * $traslados->perPage());
    }
}

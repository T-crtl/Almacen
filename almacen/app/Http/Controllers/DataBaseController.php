<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBaseController extends Controller
{
    public function dataBase()
    {
        // Lógica para mostrar la vista de base de datos
        $rutas = [
            'Equipos' => route('equipos.index'),
            'Edificios' => route('edificios.index'),
            'Planteles' => route('campuses.index'),
            'Areas' => route('areas.index'),
            'Firmas' => route('firmas.index'),
            'Resguardos' => route('safeguards.index'),
            'Personal' => route('peopledatabases.index'),
        ];
        return view('dataBase.index', [
            'rutas' => $rutas,
        ]);
    }
}

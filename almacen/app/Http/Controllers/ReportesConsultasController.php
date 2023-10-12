<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesConsultasController extends Controller
{
    public function reporte()
    {
        // Lógica para mostrar la vista de base de datos
        return view('reportesConsultas.index');
    }
}

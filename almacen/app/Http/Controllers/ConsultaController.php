<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
/**
 * Class CampusController
 * @package App\Http\Controllers
 */
class ConsultaController extends Controller
{
    //

    public function index($id)
    {
        // Ejemplo 1: Obtener todos los equipos
        $equipos = Equipo::find($id);

        // Ejemplo 2: Obtener equipos activos
        //$equiposActivos = Equipo::where('estatus', 'activo')->get();

        // Ejemplo 3: Obtener equipos ordenados por precio descendente
        //$equiposOrdenados = Equipo::orderBy('precio', 'desc')->get();

        return view('consultas.index', compact('equipos'));
    }
    
}

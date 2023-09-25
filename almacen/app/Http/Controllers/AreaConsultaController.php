<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

/**
 * Class CampusController
 * @package App\Http\Controllers
 */
class AreaConsultaController extends Controller
{
    public function show($id)
    {
        $area = Area::find($id);

        return view('areaConsulta.show', compact('area'));
    }
    public function index(Request $request)
    {
        $search = $request->input('search'); // Obtener el valor de búsqueda desde la solicitud
        $plantel = $request->input('plantel');

        // Construir la consulta condicional
        $query = Area::query();

        if ($search) {
            // Buscar áreas donde la columna "division" sea igual a "Electrónica"
            $query->where('division', $search);
            if($plantel){
                $query->where('plantelID', $plantel);
            }
        }
        elseif ($plantel){
            $query->where('plantelID', $plantel);
            
        }


        // Ejecutar la consulta paginada
        $areas = $query->paginate();

        return view('areaConsulta.index', compact('areas'))
            ->with('i', (request()->input('page', 1) - 1) * $areas->perPage());
    }
}

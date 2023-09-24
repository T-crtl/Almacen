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
    //
    public function index()
    {
        $areas = Area::paginate();

        return view('areaConsulta.index', compact('areas'))
            ->with('i', (request()->input('page', 1) - 1) * $areas->perPage());
    }
    public function show($id)
    {
        $area = Area::find($id);

        return view('areaConsulta.show', compact('area'));
    }
    
}

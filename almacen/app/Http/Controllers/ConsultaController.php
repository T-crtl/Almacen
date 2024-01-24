<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;
use App\Models\Peopledatabase;
use App\Models\Equipo;
use App\Models\Firma;
use App\Models\Area;

/**
 * Class ConsultaController
 * @package App\Http\Controllers
 */
class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultas = Consulta::paginate();

        return view('consulta.index', compact('consultas'))
            ->with('i', (request()->input('page', 1) - 1) * $consultas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consulta = new Consulta();
        $nominas = Peopledatabase::pluck('nomina', 'id');
        $nombres = Peopledatabase::pluck('nombre', 'id');
        $equipos = Equipo::pluck('id', 'id');
        $firmas = Firma::pluck('NombrePersonal', 'id');
        $areas = Area::pluck('descripcion', 'id');
        //$firmas2 = Firma::pluck('NombrePersonal', 'id');
        return view('consulta.create', compact('consulta', 'nombres', 'equipos', 'firmas', 'areas', 'nominas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consulta::$rules);

        $consulta = Consulta::create($request->all());

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta = Consulta::find($id);

        return view('consulta.show', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Consulta::find($id);

        return view('consulta.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consulta $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulta $consulta)
    {
        request()->validate(Consulta::$rules);

        $consulta->update($request->all());

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consulta = Consulta::find($id)->delete();

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta deleted successfully');
    }
    public function obtenerResguardatarios($nominaId)
    {
    // Lógica para obtener resguardatarios según la nominaId
    $resguardatarios = Consulta::where('nomina', $nominaId)->pluck('resguardatario', 'id'); // Tu lógica aquí para obtener resguardatarios

        return response()->json($resguardatarios);
    }

}   


<?php

namespace App\Http\Controllers;


use App\Models\Equipo;
use App\Models\Area;
use Illuminate\Http\Request;
use PhpParser\Node\Expr;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\EquipoExport;
use App\Imports\EquipoImport;

/**
 * Class EquipoController
 * @package App\Http\Controllers
 */
class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::paginate();
        return view('equipo.index', compact('equipos'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipo = new Equipo();
        $areas = Area::pluck('descripcion', 'id');
        //$tipo_adquisicion = 
        return view('equipo.create', compact('equipo', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Equipo::$rules);

        $equipo = Equipo::create($request->all());

        return redirect()->route('home');

        // return redirect()->route('equipos.index')
        //     ->with('success', 'Equipo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.show', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        $areas = Area::pluck('descripcion', 'id');

        return view('equipo.edit', compact('equipo', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Equipo $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        request()->validate(Equipo::$rules);

        $equipo->update($request->all());

        return response()->json([
            true,
            'Equipo actualizado',
            'Equipo actualizado correctamente',
            'success',
        ]);
        /*return redirect()->route('equipos.index')
            ->with('success', 'Equipo updated successfully');*/
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id)->delete();

        return redirect()->route('home');

        /*return response()->json([
            true,
            'Registro eliminado',
            'Registro eliminado correctamente',
            'warning',
        ]);*/
    }

    public function exportExcel()
    {
        return Excel::download(new EquipoExport, 'equipo-list.xlsx');
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new EquipoImport, $file);

        return redirect()->route('home');
        // return redirect()->route('equipos.index')
        //     ->with('success', 'Excel cargado correctamente.');
    }

    public function buscar(Request $request)
{
    $query = $request->input('query');

    // Utiliza el método where para aplicar condiciones de búsqueda
    $equipos = Equipo::where('descripcion', 'LIKE', '%' . $query . '%')
        ->orWhere('marca', 'LIKE', '%' . $query . '%')
        ->paginate(); // Agrega paginación si es necesario

    return view('equipo.index', compact('equipos'))
        ->with('i', (request()->input('page', 1) - 1) * $equipos->perPage())
        ->with('query', $query); // Pasa el término de búsqueda a la vista
}

}

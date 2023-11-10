<?php

namespace App\Http\Controllers;

use App\Models\Peopledatabase;
use Illuminate\Http\Request;
use App\Models\Campus;
use App\Http\resources\views\LoginCeti;

/**
 * Class PeopledatabaseController
 * @package App\Http\Controllers
 */
class PeopledatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peopledatabases = Peopledatabase::paginate();

        return view('peopledatabase.index', compact('peopledatabases'))
            ->with('i', (request()->input('page', 1) - 1) * $peopledatabases->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peopledatabase = new Peopledatabase();
        $campus = Campus::pluck('descripcion', 'id');
        return view('peopledatabase.create', compact('peopledatabase', 'campus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Peopledatabase::$rules);

        $peopledatabase = Peopledatabase::create($request->all());

        return redirect()->route('peopledatabases.index')
            ->with('success', 'Peopledatabase created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peopledatabase = Peopledatabase::find($id);

        return view('peopledatabase.show', compact('peopledatabase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peopledatabase = Peopledatabase::find($id);
        $campus = Campus::pluck('descripcion', 'id');
        return view('peopledatabase.edit', compact('peopledatabase', 'campus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Peopledatabase $peopledatabase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peopledatabase $peopledatabase)
    {
        request()->validate(Peopledatabase::$rules);

        $peopledatabase->update($request->all());

        return redirect()->route('peopledatabases.index')
            ->with('success', 'Peopledatabase updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $peopledatabase = Peopledatabase::find($id)->delete();

        return redirect()->route('peopledatabases.index')
            ->with('success', 'Peopledatabase deleted successfully');
    }
}

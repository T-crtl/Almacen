<?php

namespace App\Http\Controllers;

use App\Models\Personale;
use Illuminate\Http\Request;

/**
 * Class PersonaleController
 * @package App\Http\Controllers
 */
class PersonaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personales = Personale::paginate();

        return view('personale.index', compact('personales'))
            ->with('i', (request()->input('page', 1) - 1) * $personales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personale = new Personale();
        return view('personale.create', compact('personale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Personale::$rules);

        $personale = Personale::create($request->all());

        return redirect()->route('personales.index')
            ->with('success', 'Personale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personale = Personale::find($id);

        return view('personale.show', compact('personale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personale = Personale::find($id);

        return view('personale.edit', compact('personale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Personale $personale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personale $personale)
    {
        request()->validate(Personale::$rules);

        $personale->update($request->all());

        return redirect()->route('personales.index')
            ->with('success', 'Personale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personale = Personale::find($id)->delete();

        return redirect()->route('personales.index')
            ->with('success', 'Personale deleted successfully');
    }
}

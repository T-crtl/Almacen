<?php

namespace App\Http\Controllers;

use App\Models\Safeguard;
use Illuminate\Http\Request;

/**
 * Class SafeguardController
 * @package App\Http\Controllers
 */
class SafeguardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $safeguards = Safeguard::paginate();

        return view('safeguard.index', compact('safeguards'))
            ->with('i', (request()->input('page', 1) - 1) * $safeguards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $safeguard = new Safeguard();
        return view('safeguard.create', compact('safeguard'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Safeguard::$rules);

        $safeguard = Safeguard::create($request->all());

        return redirect()->route('safeguards.index')
            ->with('success', 'Safeguard created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $safeguard = Safeguard::find($id);

        return view('safeguard.show', compact('safeguard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $safeguard = Safeguard::find($id);

        return view('safeguard.edit', compact('safeguard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Safeguard $safeguard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Safeguard $safeguard)
    {
        request()->validate(Safeguard::$rules);

        $safeguard->update($request->all());

        return redirect()->route('safeguards.index')
            ->with('success', 'Safeguard updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $safeguard = Safeguard::find($id)->delete();

        return redirect()->route('safeguards.index')
            ->with('success', 'Safeguard deleted successfully');
    }
}

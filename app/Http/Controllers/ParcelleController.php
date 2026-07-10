<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcelle;

class ParcelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $parcelles = \App\Models\Parcelle::all();
    return view('parcelles.index', compact('parcelles'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    return view('parcelles.create');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'culture' => 'required',
        'superficie' => 'required|numeric',
        'date_plantation' => 'required|date',
        'statut' => 'required'
    ]);

    \App\Models\Parcelle::create($request->all());

    return redirect()->route('parcelles.index');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $parcelle = Parcelle::findOrFail($id);
    return view('parcelles.show', compact('parcelle'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $parcelle = Parcelle::findOrFail($id);
    return view('parcelles.edit', compact('parcelle'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required',
        'culture' => 'required',
        'superficie' => 'required|numeric',
        'date_plantation' => 'required|date',
        'statut' => 'required'
    ]);

    $parcelle = Parcelle::findOrFail($id);
    $parcelle->update($request->all());

    return redirect()->route('parcelles.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    Parcelle::destroy($id);
    return redirect()->route('parcelles.index');
}
}

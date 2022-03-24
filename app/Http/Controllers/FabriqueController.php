<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fabrique;

class FabriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fabriques = Fabrique::all();

        return view('index', compact('fabriques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'location' => 'required|max:255',
            'nombreCohorte' => 'required',
            'ouverte' => 'required',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    $fabrique = Fabrique::findOrFail($id);

    return view('edit', compact('fabrique'));
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
        //
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'location' => 'required|max:255',
            'nombreCohorte' => 'required',
            'ouverte' => 'required',
        ]);
    
        Fabrique::whereId($id)->update($validatedData);
    
        return redirect('/fabriques')->with('success', 'Fabrique inserer avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fabrique = Fabrique::findOrFail($id);
        $fabique->delete();
    
        return redirect('/fabriques')->with('success', 'Fabrique supprimer avec succèss');
       
    }
}

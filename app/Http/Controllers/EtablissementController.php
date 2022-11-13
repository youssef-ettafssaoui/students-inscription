<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etablissements = Etablissement::get();
        return view('admin.etablissements.index', compact('etablissements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etablissements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:etablissements',
            'etablissement' => 'required|string|max:60',
            'address' => 'required|string|max:100',
            'website' => 'required|string|min:20',
            'slogan' => 'required|string|max:60',
            'phone' => 'required|string|max:18',
            'description' => 'required|max:800'
        ]);
        Etablissement::create([
            'etablissement' => request('etablissement'),
            'slug' => str_slug(request('etablissement')),
            'email' => request('email'),
            'address' => request('address'),
            'ville' => request('ville'),
            'website' => request('website'),
            'slogan' => request('slogan'),
            'phone' => request('phone'),
            'description' => request('description')
        ]);
        return redirect()->route('etablissement.index')->with('message', 'Etablissement crée avec succès !');
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
        $etablissement = Etablissement::findOrFail($id);
        return view('admin.etablissements.edit', compact('etablissement'));
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
        $etablissement = Etablissement::findOrFail($id);
        $etablissement->update($request->all());
        return redirect()->route('etablissement.index')->with('message', 'Informations Etablissemet mises à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etablissement = Etablissement::find($id);
        $etablissement->delete();
        return redirect()->route('etablissement.index')->with('message', 'Etablissement supprimée avec Succès !');
    }
}
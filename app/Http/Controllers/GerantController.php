<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Gerant;
use App\Models\Formation;
use Illuminate\Http\Request;

class GerantController extends Controller
{
    public function __construct()
    {
        $this->middleware('gerant', ['except' => array('index', 'gerant')]);
    }

    public function index($id, Gerant $gerant)
    {
        $formations = Formation::where('user_id', $id)->get();
        return view('gerant.index', compact('gerant'));
    }

    public function gerant()
    {
        $gerants = Gerant::latest()->paginate(10);
        return view('gerant.gerant', compact('gerants'));
    }

    public function create()
    {
        return view('gerant.create');
    }

    public function store()
    {
        $user_id = auth()->user()->id;

        Gerant::where('user_id', $user_id)->update([
            'address' => request('address'),
            'phone' => request('phone'),
            'website' => request('website'),
            'slogan' => request('slogan'),
            'description' => request('description')
        ]);
        return redirect()->back()->with('message', 'Informations du Gérant mises à jour avec succès !');
    }
}
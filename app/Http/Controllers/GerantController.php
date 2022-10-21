<?php

namespace App\Http\Controllers;

use App\Models\Gerant;
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
            'position' => request('position'),
            'address' => request('address'),
            'phone' => request('phone'),
            'education' => request('education'),
            'work' => request('work'),
            'origin' => request('origin'),
            'faceboock' => request('faceboock'),
            'instagram' => request('instagram'),
            'linkedIn' => request('linkedIn'),
            'youtube' => request('youtube'),
        ]);
        return redirect()->back()->with('message', 'Informations du Gérant mises à jour avec succès !');
    }

    public function gerantLogo(Request $request)
    {
        $user_id = auth()->user()->id;
        if ($request->hasfile('gerant_logo')) {

            $file = $request->file('gerant_logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/logo/', $filename);
            Gerant::where('user_id', $user_id)->update([
                'logo' => $filename
            ]);
        }
        return redirect()->back()->with('message', 'Logo du Gérant Mis à jour avec succès !');
    }
}
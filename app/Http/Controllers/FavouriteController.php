<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function saveFormation($id)
    {
        $formationId = Formation::find($id);
        $formationId->favorites()->attach(auth()->user()->id);
        return redirect()->back();
    }

    public function unSaveFormation($id)
    {
        $formationId = Formation::find($id);
        $formationId->favorites()->detach(auth()->user()->id);
        return redirect()->back();
    }
}
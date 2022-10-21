<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'cin' => 'required|min:8',
            'cne' => 'required|min:10',
            'bio' => 'required|min:20',
            'phone_number' => 'required|min:10|numeric'
        ]);

        $user_id = auth()->user()->id;

        Etudiant::where('user_id', $user_id)->update([
            'address' => request('address'),
            'cin' => request('cin'),
            'cne' => request('cne'),
            'bio' => request('bio'),
            'phone_number' => request('phone_number')
        ]);
        return redirect()->back()->with('message', 'Profil mis à jour avec succès !');
    }

    public function avatar(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'required|mimes:png,jpeg,jpg|max:20000'
        ]);
        $user_id = auth()->user()->id;
        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/avatar/', $filename);
            Etudiant::where('user_id', $user_id)->update([
                'avatar' => $filename
            ]);
            return redirect()->back()->with('message', 'Photo de profil mise à jour avec succès !');
        }
    }
}
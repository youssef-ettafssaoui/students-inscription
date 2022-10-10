<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class EtudiantRegisterController extends Controller
{
    public function employerRegister(Request $request)
    {

        $this->validate($request, [
            'cin' => 'required|string|max:10',
            'cin' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user =  User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type'),
        ]);
        Etudiant::create([
            'user_id' => $user->id,
            'cin' => request('cin'),
            'slug' => str_slug(request('cname'))
        ]);
        return redirect()->back()->with('message', 'Veuillez vérifier votre e-mail en cliquant sur le lien envoyé à votre adresse e-mail');
    }
}
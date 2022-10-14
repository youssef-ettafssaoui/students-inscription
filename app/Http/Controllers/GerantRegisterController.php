<?php

namespace App\Http\Controllers;

use App\Models\Gerant;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GerantRegisterController extends Controller
{
    public function gerantRegister(Request $request)
    {

        $this->validate($request, [
            'gname' => 'required|string|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $role = Role::where('name', 'gerant')->first();
        $user =  User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role_id' => $role->id,
        ]);
        Gerant::create([
            'user_id' => $user->id,
            'gname' => request('gname'),
            'slug' => str_slug(request('cname'))
        ]);
        return redirect()->back()->with('message', 'Veuillez vérifier votre e-mail en cliquant sur le lien envoyé à votre adresse e-mail');
    }
}
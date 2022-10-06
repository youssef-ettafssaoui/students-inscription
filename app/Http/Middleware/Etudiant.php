<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Etudiant
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role->name == "etudiant") {
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Formation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function gerant()
    {
        return $this->belongsTo('App\Models\Gerant');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimeStamps();
    }

    public function checkApplication()
    {
        return DB::table('formation_user')->where('user_id', auth()->user()->id)->where('formation_id', $this->id)->exists();
    }

    public function favorites()
    {
        return $this->belongsToMany(Formation::class, 'favourites', 'formation_id', 'user_id')->withTimeStamps();
    }
    public function checkSaved()
    {
        return DB::table('favourites')->where('user_id', auth()->user()->id)->where('formation_id', $this->id)->exists();
    }
}
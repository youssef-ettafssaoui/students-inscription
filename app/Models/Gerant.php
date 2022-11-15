<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etablissement()
    {
        return $this->belongsTo('App\Models\Etablissement');
    }

    public function formations()
    {
        return $this->hasMany('App\Models\Formation');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gerant;

class Etablissement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gerants()
    {
        return $this->hasMany(Gerant::class);
    }
}
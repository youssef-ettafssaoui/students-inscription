<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formation;

class Categorie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
}
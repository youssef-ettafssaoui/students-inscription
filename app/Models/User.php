<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Etudiant;
use App\Models\Gerant;
use App\Models\Formation;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function etudiant()
    {
        return $this->hasOne(Etudiant::class);
    }

    public function gerant()
    {
        return $this->hasOne(Gerant::class);
    }
    public function favorites()
    {
        return $this->belongsToMany(Formation::class, 'favourites', 'user_id', 'formation_id')->withTimeStamps();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
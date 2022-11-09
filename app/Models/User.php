<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'section_id',
        'role_id',
        'matricule',
        'nom',
        'prenom',
        'email',
        'date_n',
        'lieu_n',
        'tel',
        'adresse',
        'photo',
        'password',
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

    public function Service()
    {
        return $this->hasMany('App\Models\Service');
    }

    public function Client()
    {
        return $this->hasMany('App\Models\Client');
    }

    public function Emploi()
    {
        return $this->hasMany('App\Models\Emploi');
    }

    public function Projet()
    {
        return $this->hasMany('App\Models\Projet');
    }


    public function Section()
    {
        return $this->belongsTo('App\Models\Section');
    }
}

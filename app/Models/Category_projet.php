<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'libelle',
        'description',
    ];

    public function Projet()
    {
        return $this->hasMany('App\Models\Projet');
    }

}

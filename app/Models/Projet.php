<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_projet_id',
        'libelle',
        'image',
        'client',
        'description',
        'statut',
    ];

    
    public function Category_projet()
    {
        return $this->belongsTo('App\Models\Category_projet');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}

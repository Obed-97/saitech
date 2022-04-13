<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_emploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'libelle',
        'image',
        'description',
    ];

    public function Emploi()
    {
        return $this->hasMany('App\Models\Emploi');
    }

    
}

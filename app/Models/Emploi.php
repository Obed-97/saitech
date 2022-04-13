<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_emploi_id',
        'user_id',
        'libelle',
        'date_limite',
        'type_contrat',
        'nbre_place',
        'experience',
        'niveau',
        'description',
    ];

    public function Category_emploi()
    {
        return $this->belongsTo('App\Models\Category_emploi');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}

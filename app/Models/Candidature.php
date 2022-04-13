<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nom',
        'prenom',
        'ville',
        'pays',
        'adresse',
        'code_postal',
        'telephone',
        'email',
        'poste',
        'cv',
        'lettre',
        'description',
        'statut',
    ];
}

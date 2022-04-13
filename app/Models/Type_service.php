<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_service extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'image',
        'description',
    ];

    public function Service()
    {
        return $this->hasMany('App\Models\Service');
    }
}

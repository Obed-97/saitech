<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'user_id',
        'image',
        'libelle',
    ];

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}

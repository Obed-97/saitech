<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'libelle',
        'image',
        'description',
    ];
}

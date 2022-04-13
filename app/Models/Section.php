<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'image',
        'description',
    ];

    
public function Services()
{
    return $this->hasMany('App\Models\Service');
}


}

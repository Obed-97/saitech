<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_service_id',
        'user_id',
        'section_id',
        'libelle',
        'prix',
        'type_client',
        'image',
        'description',
    ];

    public function Type_service()
    {
        return $this->belongsTo('App\Models\Type_service');
    }

    public function Section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}

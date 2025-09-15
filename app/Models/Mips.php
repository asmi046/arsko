<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mips extends Model
{
    protected $fillable = [
        'title',
        'cover',
        'slug',
        'map',
        'geo',
        'description',
        'presentation',
        'cadastral_number',
        'address',
        'area',
        'urban_potential',
        'max_floors',
        'build_percent',
        'ownership',
        'land_category',
        'functional_zone',
        'usage_type',
        'special_usage',
        'encumbrance',
        'gallery',
        'social_infrastructure',
    ];
}

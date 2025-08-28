<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'sort_order',
    ];
}

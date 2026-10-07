<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'category',
        'proficiency',
        'icon',
        'is_active',
    ];

    protected $casts = [
        'proficiency' => 'integer',
        'is_active' => 'boolean',
    ];
}

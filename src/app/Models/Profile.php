<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [

        'name',
        'role',
        'description',
        'photo',
        'tech_stack',
        'project_title',
        'project_subtitle',

    ];

    protected $casts = [

        'tech_stack' => 'array',

    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [

        'title',
        'slug',
        'category',
        'image',
        'short_description',
        'description',

        'tech_stack',

        'problem_analysis',
        'features',
        'architecture',
        'diagram',

    ];

    protected $casts = [

        'tech_stack' => 'array',

        'features' => 'array',

    ];
}
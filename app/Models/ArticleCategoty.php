<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategoty extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'active',
    ];
    protected $casts = [
        'active' => 'boolean',
    ];
}

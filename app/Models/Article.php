<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'preview_text',
        'detail_text',
        'preview_image',
        'detail_image',
        'tags',
        'category_id',
        'published_at',
        'active',
    ];

    protected $casts = [
        'tags' => 'json',
        'published_at' => 'datatime',
        'active' => 'boolean'

    ];
}

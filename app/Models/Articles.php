<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Articles extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title',
        'intro',
        'avatar',
        'text',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    protected $translatable = [
        'title',
        'intro',
        'text',
    ];

}

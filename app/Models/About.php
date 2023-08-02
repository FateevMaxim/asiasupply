<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'gallery'
    ];

    protected $casts = [
        'gallery' => 'array'
    ];
}

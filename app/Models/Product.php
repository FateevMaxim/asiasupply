<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'avatar',
        'intro',
        'short_description',
        'product_category_id',
        'description',
        'media',
    ];

    protected $casts = [
        'description' => 'array',
        'media' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategories::class, 'product_category_id');
    }
}

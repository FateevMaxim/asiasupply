<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'avatar',
    ];

    public function products (){
        return $this->hasMany(Product::class, 'product_category_id');
    }
}

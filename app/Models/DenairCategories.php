<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenairCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'avatar',
    ];

    public function denairs (){
        return $this->hasMany(Denair::class, 'denair_category_id');
    }
}

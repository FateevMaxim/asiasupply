<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoergerCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'avatar',
    ];

    public function boergers (){
        return $this->hasMany(Boerger::class, 'boerger_category_id');
    }
}

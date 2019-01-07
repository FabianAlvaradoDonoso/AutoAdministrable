<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'image', 'outstanding', 'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class)->select('id', 'name', 'description');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function products(){
        return $this->belongsToMany('\App\Supplier', 'products_suppliers');
    }
}

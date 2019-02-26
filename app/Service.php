<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = ['title','imagen'];
    
    public function getRouteKeyName(){
        return 'slug';
    }
}

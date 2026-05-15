<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getImageUrlAttribute()
{
    return asset('images/product/' . strtolower($this->name) . '.png');
}

    
}

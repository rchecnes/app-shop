<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //$product->products;
    public function products(){
    	return $this->belongsTo(Product::class);
    }
}

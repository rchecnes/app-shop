<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //$category->category;
    public function category(){
    	return $this->hasMany(Category::class);
    }

    //$product->images
    public function images(){
    	return $this->hasMany(ProductImage::class);
    }
}

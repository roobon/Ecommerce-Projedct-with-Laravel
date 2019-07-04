<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table='product';
   
//    category have this product

public function category() {
    return $this -> belongsTo(Category::class);
  }
// also manufacturer have this product
  public function manufacturer() {
    return $this -> belongsTo(Manufacturer::class);
  }
}

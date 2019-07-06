<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table='product';
   // make field fillable
protected $fillable = ['category_id','manufacturer_id','product_name','product_short_description','product_long_description','product_price','product_image','product_size','product_color','publication_status'];
   
//    category have this product

public function category() {
    return $this -> belongsTo(Category::class);
  }
// also manufacturer have this product
  public function manufacturer() {
    return $this -> belongsTo(Manufacturer::class);
  }
}

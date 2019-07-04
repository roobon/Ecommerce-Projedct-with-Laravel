<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    // protect table name
	protected $table='manufacturer'; 
	// catagory created many product
  
   public function product() {
    return $this -> hasMany(Product::class);
  }
}

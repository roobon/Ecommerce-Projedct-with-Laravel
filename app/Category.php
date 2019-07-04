<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protect table name
	protected $table='category'; 
    //  catagory store many product
    public function product() {
     return $this -> hasMany(Product::class);
}
}
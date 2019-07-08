<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Customer extends Model
{
   protected $table='customer'; 
   protected $primaryKey = 'customer_id';

   public function order(){
    	$this->hasMany(Order::class);
    }
}

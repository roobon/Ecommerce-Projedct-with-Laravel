<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Shippings extends Model
{
    protected $table='shipping';

    protected $primaryKey = 'shipping_id';

    protected $fillable = ['shipping_first_name','shipping_last_name','shipping_address','shipping_telephone','shipping_email'];

     public function order(){
    	$this->hasOne(Order::class);
    }
}

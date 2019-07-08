<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Payment extends Model
{
    protected $table= 'payment';
    protected $primaryKey = 'payment_id';
    protected $fillable = ['payment_method', 'payment_status'];

     public function order(){
    	$this->hasOne(Order::class);
    }
}

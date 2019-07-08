<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use App\Shippings;
use App\Payment;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    public function customer(){
    	$this->belongsTo(Customer::class);
    }

    public function shippings(){
    	$this->hasOne(Shippings::class);
    }

    public function payment(){
    	$this->hasOne(Payment::class);
    }
}

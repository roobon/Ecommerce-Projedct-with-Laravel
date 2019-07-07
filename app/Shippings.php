<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shippings extends Model
{
    protected $table='shipping';

    protected $primaryKey = 'shipping_id';

    protected $fillable = ['shipping_first_name','shipping_last_name','shipping_address','shipping_telephone','shipping_email'];
}

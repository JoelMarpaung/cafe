<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderTemp extends Model
{
	protected $table = 'order_product_temp';
	protected $fillable = ['product_name','product_type','quantity','total_price','table_number','customer_username','product_id'];
    //
}

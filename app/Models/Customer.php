<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customer_data';
	protected $fillable = ['username','first_name','last_name','balance'];
    //
}

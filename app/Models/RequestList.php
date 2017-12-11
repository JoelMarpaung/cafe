<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestList extends Model
{
	protected $table = 'topup_request';
	protected $fillable = ['balance','customer_username'];
    //
}

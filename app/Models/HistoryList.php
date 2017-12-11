<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryList extends Model
{
	protected $table = 'topup_history';
	protected $fillable = ['balance','customer_username'];
    //
}

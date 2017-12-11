<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dapur extends Model
{
	protected $table = 'dapur';
	protected $fillable = ['name','type','quantity','deskripsi'];
    //
}

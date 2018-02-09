<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psono extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'hora'];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piten extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'hora'];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['date', 'name', 'place', 'about'];
}

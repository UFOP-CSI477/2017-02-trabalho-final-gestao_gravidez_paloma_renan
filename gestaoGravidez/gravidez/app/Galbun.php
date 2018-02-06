<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galbun extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'foto'];
}

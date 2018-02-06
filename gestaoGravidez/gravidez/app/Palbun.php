<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palbun extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'foto'];
}

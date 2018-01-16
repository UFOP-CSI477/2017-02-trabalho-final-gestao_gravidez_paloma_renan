<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppt extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['teacher_id', 'weekdays', 'time', 'active'];
}

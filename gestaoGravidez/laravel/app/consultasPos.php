<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraClass extends Model
{
	protected $table = 'extraclasses';
	public $timestamps = false;
	protected $fillable = ['class_id', 'date', 'time', 'comment'];
}

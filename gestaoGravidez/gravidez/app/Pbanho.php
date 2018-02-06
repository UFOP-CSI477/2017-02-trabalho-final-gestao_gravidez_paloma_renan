<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pbanho extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'hora', 'observacao', 'sugerido'];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gvacina extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'hora', 'nome', 'obs', 'sugerido'];
}

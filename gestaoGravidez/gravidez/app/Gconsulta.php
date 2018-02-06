<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gconsulta extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'hora', 'medico', 'obs', 'sugerido'];
}

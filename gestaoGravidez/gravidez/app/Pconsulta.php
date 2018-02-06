<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pconsulta extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'hora', 'pediatra', 'obs'];
}
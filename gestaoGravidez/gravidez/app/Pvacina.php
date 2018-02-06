<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pvacina extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'hora', 'nome', 'obs'];
}
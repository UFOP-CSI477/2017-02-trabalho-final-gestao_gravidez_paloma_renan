<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palimentacoe extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['cardapio', 'data', 'hora', 'obs', 'sugerido'];
}
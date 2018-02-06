<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gdesejo extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'descricao'];
}

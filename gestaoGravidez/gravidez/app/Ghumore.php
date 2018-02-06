<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghumore extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'nivel', 'descricao'];
}

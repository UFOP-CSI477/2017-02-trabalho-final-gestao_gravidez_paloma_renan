<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gdiario extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['data', 'peso', 'altura', 'posicao', 'descricao'];
}

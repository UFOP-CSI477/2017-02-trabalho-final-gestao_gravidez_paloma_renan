<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pficha extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['nome', 'foto', 'nascimento', 'cidade', 'hospital', 'genitor1', 'genitor2', 'medico'];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsors';
	public $timestamps = false;
	protected $fillable = ['cpf', 'registration', 'name', 'email', 'birth'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    protected $table = 'secretaries';
	public $timestamps = false;
	protected $fillable = ['cpf', 'registration', 'name', 'email', 'birth'];
}

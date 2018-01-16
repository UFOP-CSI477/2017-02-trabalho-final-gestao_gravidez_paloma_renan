<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
	protected $table = 'classes';
	public $timestamps = false;
	protected $fillable = ['level', 'schedule', 'starts_at', 'ends_at', 'active', 'teacher_id', 'course_id'];
}

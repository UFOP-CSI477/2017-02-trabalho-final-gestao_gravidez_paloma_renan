<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classes;
use App\Course;
use App\Frequency;
use App\Classes_Has_Students;
use App\Student;


class FrequencyController extends Controller
{
    public function create(){
        $classes = Classes::all()->pluck('level','id');
        $courses = Course::all()->pluck('name','id');
        $students = DB::table('students')
            ->join('classes_has_students','classes_has_students.student_id','=','students.id')
            ->where('classes_has_students.active','=','1')
            ->orderBy('students.name')
            ->get();
        
        return view('frequencies.create',compact('classes','courses','students'));
    }

    public function index(){
    	$frequencies = Frequency::all();
    	$classes = Classes::all()->pluck('level','id');
    	$courses = Course::all()->pluck('name','id');
    	$students = Student::all()->pluck('name','id');

        return view('frequencies.index',compact('frequencies','classes','courses','students'));
    }

}
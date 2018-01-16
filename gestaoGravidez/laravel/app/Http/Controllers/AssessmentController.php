<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Participation;
use App\Classes;
use App\Course;
use App\Assessment;
use App\Student;

class AssessmentController extends Controller
{

    public function getClass($course){
        $classes = Classes::where('course_id',$course);
        return Response::json($classes);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assessments = Assessment::all();
        $participations = Participation::all()->sortBy('assessments_id');
        //$classes = DB::table('classes')
        //    ->join('assessments','classes.id','=','assessments.class_id')
        //    ->select('classes.id','classes.level')
        //    ->where('assessments.student_id','1')->pluck('level','id');
        $classes = Classes::all(['id','level','teacher_id','course_id'])->sortBy('level')->pluck('level','teacher_id','course_id','id');
        $courses = Course::all()->pluck('name','id')->sortBy('level');
        $students = Student::all()->pluck('name','id')->sortBy('name');

        return view('assessments.index',compact('assessments','participations','classes','courses','students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all(['id','level','teacher_id','course_id'])->sortBy('level')->pluck('level','teacher_id','course_id','id');
        $courses = Course::all()->pluck('name','id')->sortBy('level');
        return view('assessments.create',compact('classes','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $Assessments = Assessment::Create($inputs);
        
        return redirect()->action('AssessmentController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assessment = Assessment::find($id);

        return view('assessments.show')
            ->with('assessment', $assessment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assessment = Assessment::find($id);

        return view('assessments.edit')
            ->with('assessment', $assessment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assessment::destroy($id);

        return redirect()->action('AssessmentController@index');
        
    }
}

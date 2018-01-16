<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Participation;
use App\Classes;
use App\Course;
use App\Assessment;
use App\Student;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assessments = Assessment::all();
        $participations = Participation::all()->sortBy('assessments_id');
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
        $assessments = Assessment::all();
        $participations = Participation::all();
        $classes = Classes::all(['id','level','teacher_id','course_id'])->sortBy('level')->pluck('level','teacher_id','course_id','id');
        $courses = Course::all()->pluck('name','id')->sortBy('level');

        return view('participations.create',compact('assessments','participations','classes','courses'));
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

        $participations = Participation::Create($inputs);
        
        return redirect()->action('ParticipationController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participation = Participation::find($id);

        return view('participations.show')
            ->with('participation', $participation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participation = Participation::find($id);

        return view('participations.edit')
            ->with('participation', $participation);
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
        $participation = Participation::find($id);

        $participation->class_id = $request->class_id;
        $participation->student_id = $request->student_id;
        $participation->assessments_id = $request->assessments_id;
       
        $participation->month = $request->month;
        $participation->dedication = $request->dedication;
        $participation->performance = $request->performance;
        $participation->interaction = $request->interaction;
        $participation->read_write = $request->read_write;
        $participation->frequency = $request->frequency;

        $participation->save();

        return redirect()->action('ParticipationController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participation = Participation::find($id)->delete();

        return redirect()->action('CourseController@index');
    }
}

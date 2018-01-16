<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index')
            ->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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

        $students = Student::Create($inputs);
        
        return redirect()->action('StudentController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);

        return view('students.show')
            ->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.edit', compact('student', $student));

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
        $student = Student::find($id);

        $student->cpf = $request->cpf;
        $student->registration = $request->registration;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->birth = $request->birth;
        $student->save();

        return redirect()->action('StudentController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Product::destroy($id);

        $student = Student::find($id)
            ->delete();

        return redirect()->action('StudentController@index');

    }

    /**
     * Student's history. Assessments and Frequencies are all here.
     * @param ()
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $assessments = Assessment::all()->where('student_id',1);
        $classes = DB::table('classes')
            ->join('assessments','classes.id','=','assessments.class_id')
            ->where('assessments.student_id','1')
            ->where('classes.active',False)
            ->select('classes.level','classes.id','classes.starts_at')
            ->distinct()
            ->orderBy('starts_at','desc')->get();
        $participations = Participation::all()->where('student_id',1);

        return view('students.history',compact('classes','courses','assessments','participations'));
    }

    /**
     * Student's frequency. Assessments and Frequencies are all here.
     * @param ()
     * @return \Illuminate\Http\Response
     */
    public function myFrequency(){
        $classes = DB::table('classes')
            ->join('frequencies','classes.id','=','frequencies.class_id')
            ->where('frequencies.student_id','1')
            ->where('classes.active',True)
            ->select('classes.level','classes.id','classes.starts_at')
            ->distinct()
            ->orderBy('starts_at','desc')->get();
        $frequencies = Frequency::all()->where('student_id',1); //Modificar isso para o tratamento de login

        return view('students.myfrequency',compact('classes','frequencies'));
    }
   
}
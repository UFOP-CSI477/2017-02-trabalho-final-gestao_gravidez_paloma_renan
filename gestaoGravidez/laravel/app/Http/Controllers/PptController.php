<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ppt;
use App\Teacher;

class PptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppts = Ppt::all();
        return view('ppts.index')
            ->with('ppts', $ppts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all()->pluck('name','id')->sortBy('name');
        return view('ppts.create',compact('teachers'));
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

        $ppts = Ppt::Create($inputs);
        
        return redirect()->action('PptController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppt = Ppt::find($id);

        return view('ppts.show')
            ->with('ppt', $ppt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppt = Ppt::find($id);

        return view('ppts.edit', compact('ppt', $ppt));

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
        $ppt = Ppt::find($id);

        $ppt->teacher_id = $request->teacher_id;
        $ppt->weekdays = $request->weekdays;
        $ppt->time = $request->time;
        $ppt->active = $request->active;
        $ppt->save();

        return redirect()->action('PptController@index');
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

        $ppt = Ppt::find($id)
            ->delete();

        return redirect()->action('PptController@index');

    }
}
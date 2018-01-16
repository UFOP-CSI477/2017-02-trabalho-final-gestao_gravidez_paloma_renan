<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ExtraClass;

class ExtraClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extraclasses = ExtraClass::all();
        return view('extraclasses.index')
            ->with('extraclasses', $extraclasses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('extraclasses.create');
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

        $extraclasses = ExtraClass::Create($inputs);
        
        return redirect()->action('ExtraClassController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extraclass = ExtraClass::find($id);

        return view('extraclasses.show')
            ->with('extraclass', $extraclass);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extraclass = ExtraClass::find($id);

        return view('extraclasses.edit', compact('extraclass', $extraclass));

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
        $extraclass = ExtraClass::find($id);

        $extraclass->language = $request->language;
        $extraclass->active = $request->active;
        $extraclass->save();

        return redirect()->action('ExtraClassController@index');
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

        $extraclass = ExtraClass::find($id)
            ->delete();

        return redirect()->action('ExtraClassController@index');

    }
}
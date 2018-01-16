<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Secretary;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretaries = Secretary::all();
        return view('secretaries.index')
            ->with('secretaries', $secretaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secretaries.create');
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

        $secretaries = Secretary::Create($inputs);
        
        return redirect()->action('SecretaryController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secretary = Secretary::find($id);

        return view('secretaries.show')
            ->with('secretary', $secretary);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secretary = Secretary::find($id);

        return view('secretaries.edit', compact('secretary', $secretary));

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
        $secretary = Secretary::find($id);

        $secretary->cpf = $request->cpf;
        $secretary->registration = $request->registration;
        $secretary->name = $request->name;
        $secretary->email = $request->email;
        $secretary->birth = $request->birth;
        $secretary->save();

        return redirect()->action('SecretaryController@index');
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

        $secretary = Secretary::find($id)
            ->delete();

        return redirect()->action('SecretaryController@index');

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Galbun;

class GalbunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galbuns = Galbun::all();
        return view('galbuns.index')
            ->with('galbuns', $galbuns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galbuns.create');
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

        $galbuns = Galbun::Create($inputs);
        
        return redirect()->action('GalbunController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galbun = Galbun::find($id);

        return view('galbuns.show')
            ->with('galbun', $galbun);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galbun = Galbun::find($id);

        return view('galbuns.edit', compact('galbun', $galbun));

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
        $galbun = Galbun::find($id);

        $galbun->data = $request->data;
        $galbun->foto = $request->foto;
        $galbun->save();

        return redirect()->action('GalbunController@index');
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

        $galbun = Galbun::find($id)
            ->delete();

        return redirect()->action('GalbunController@index');

    }


    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $galbun = Galbun::all();

        //Invocar a view passando os dados
        return view ('galbuns.listar') -> with ('galbun', $galbun);

    }
}
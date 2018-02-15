<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Palbun;

class PalbunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $palbuns = Palbun::all();
        return view('palbuns.index')
            ->with('palbuns', $palbuns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('palbuns.create');
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

        $palbuns = Palbun::Create($inputs);
        
        return redirect()->action('PalbunController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Palbun = Palbun::find($id);

        return view('palbuns.show')
            ->with('palbun', $palbun);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $palbun = Palbun::find($id);

        return view('palbuns.edit', compact('palbun', $palbun));

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
        $palbun = Palbun::find($id);

        $palbun->data = $request->data;
        $palbun->foto = $request->foto;
        $palbun->save();

        return redirect()->action('PalbunController@index');
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

        $palbun = Palbun::find($id)
            ->delete();

        return redirect()->action('PalbunController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $palbun = Palbun::all();

        //Invocar a view passando os dados
        return view ('palbuns.listar') -> with ('palbun', $palbun);

    }
}
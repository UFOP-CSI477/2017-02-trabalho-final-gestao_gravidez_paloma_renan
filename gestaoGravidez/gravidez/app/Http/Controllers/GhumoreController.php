<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ghumore;

class GhumoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ghumores = Ghumore::all();
        return view('ghumores.index')
            ->with('ghumores', $ghumores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ghumores.create');
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

        $ghumores = Ghumore::Create($inputs);
        
        return redirect()->action('GhumoreController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ghumore = Ghumore::find($id);

        return view('ghumores.show')
            ->with('ghumore', $ghumore);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ghumore = Ghumore::find($id);

        return view('ghumores.edit', compact('ghumore', $ghumore));

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
        $ghumore = Ghumore::find($id);

        $ghumore->data = $request->data;
        $ghumore->nivel = $request->nivel;
        $ghumore->descricao = $request->descricao;
        $ghumore->save();

        return redirect()->action('GhumoreController@index');
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

        $ghumore = Ghumore::find($id)
            ->delete();

        return redirect()->action('GhumoreController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $ghumore = Ghumore::all();

        //Invocar a view passando os dados
        return view ('ghumores.listar') -> with ('ghumore', $ghumore);

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gdesejo;

class GdesejoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gdesejos = Gdesejo::all();
        return view('gdesejos.index')
            ->with('gdesejos', $gdesejos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gdesejos.create');
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

        $gdesejos = Gdesejo::Create($inputs);
        
        return redirect()->action('GdesejoController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gdesejo = Gdesejo::find($id);

        return view('gdesejos.show')
            ->with('gdesejo', $gdesejo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gdesejo = Gdesejo::find($id);

        return view('gdesejos.edit', compact('gdesejo', $gdesejo));

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
        $gdesejo = Gdesejo::find($id);

        $gdesejo->data = $request->data;
        $gdesejo->descricao = $request->descricao;
        $event->save();

        return redirect()->action('GdesejoController@index');
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

        $gdesejo = Gdesejo::find($id)
            ->delete();

        return redirect()->action('GdesejoController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $gdesejo = Gdesejo::all();

        //Invocar a view passando os dados
        return view ('gdesejos.listar') -> with ('gdesejo', $gdesejo);

    }
}
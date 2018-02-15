<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Piten;

class PitenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pitens = Piten::all();
        return view('pitens.index')
            ->with('pitens', $pitens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pitens.create');
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

        $pitens = Piten::Create($inputs);
        
        return redirect()->action('PitenController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Piten = Piten::find($id);

        return view('pitens.show')
            ->with('piten', $piten);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $piten = Piten::find($id);

        return view('pitens.edit', compact('piten', $piten));

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
        $piten = Piten::find($id);

        $piten->nome = $request->nome;
        $piten->quantidade = $request->quantidade;
        $piten->data = $request->data;
        $piten->local = $request->local;
        $piten->valor = $request->valor;
        $piten->save();

        return redirect()->action('PitenController@index');
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

        $piten = Piten::find($id)
            ->delete();

        return redirect()->action('PitenController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $piten = Piten::all();

        //Invocar a view passando os dados
        return view ('pitens.listar') -> with ('piten', $piten);

    }
}
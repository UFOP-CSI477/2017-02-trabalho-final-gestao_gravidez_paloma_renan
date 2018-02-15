<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Palimentacoe;

class PalimentacoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $palimentacoes = Palimentacoe::all();
        return view('palimentacoes.index')
            ->with('palimentacoes', $palimentacoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('palimentacoes.create');
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

        $palimentacoes = Palimentacoe::Create($inputs);
        
        return redirect()->action('PalimentacoeController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Palimentacoe = Palimentacoe::find($id);

        return view('palimentacoes.show')
            ->with('palimentacoe', $palimentacoe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $palimentacoe = Palimentacoe::find($id);

        return view('palimentacoes.edit', compact('palimentacoe', $palimentacoe));

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
        $palimentacoe = Palimentacoe::find($id);

        $palimentacoe->cardapio = $request->cardapio;
        $palimentacoe->data = $request->data;
        $palimentacoe->hora = $request->hora;
        $palimentacoe->obs = $request->obs;
        $palimentacoe->sugerido = $request->sugerido;
        $palimentacoe->save();

        return redirect()->action('PalimentacoeController@index');
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

        $palimentacoe = Palimentacoe::find($id)
            ->delete();

        return redirect()->action('PalimentacoeController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $palimentacoe = Palimentacoe::all();

        //Invocar a view passando os dados
        return view ('palimentacoes.listar') -> with ('palimentacoe', $palimentacoe);

    }
}
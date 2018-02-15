<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pbanho;

class PbanhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pbanhos = Pbanho::all();
        return view('pbanhos.index')
            ->with('pbanhos', $pbanhos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pbanhos.create');
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

        $pbanhos = Pbanho::Create($inputs);
        
        return redirect()->action('PbanhoController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pbanho = Pbanho::find($id);

        return view('pbanhos.show')
            ->with('pbanhos', $pbanho);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pbanho = Pbanho::find($id);

        return view('pbanho.edit', compact('pbanho', $pbanho));

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
        $pbanho = Pbanho::find($id);

        $pbanho->data = $request->data;
        $pbanho->hora = $request->hora;
        $pbanho->observacao = $request->observacao;
        $pbanho->sugerido = $request->sugerido;
        $pbanho->save();

        return redirect()->action('PbanhoController@index');
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

        $pbanho = Pbanho::find($id)
            ->delete();

        return redirect()->action('PbanhoController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $pbanho = Pbanho::all();

        //Invocar a view passando os dados
        return view ('pbanhos.listar') -> with ('pbanho', $pbanho);

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pvacina;

class PvacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pvacinas = Pvacina::all();
        return view('pvacinas.index')
            ->with('pvacinas', $pvacinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pvacinas.create');
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

        $pvacinas = Pvacina::Create($inputs);
        
        return redirect()->action('PvacinaController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pvacina = Pvacina::find($id);

        return view('pvacinas.show')
            ->with('pvacina', $pvacina);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pvacina = Pvacina::find($id);

        return view('pvacinas.edit', compact('pvacina', $pvacina));

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
        $pvacina = Pvacina::find($id);

        $pvacina->data = $request->data;
        $pvacina->hora = $request->hora;
        $pvacina->nome = $request->nome;
        $pvacina->obs = $request->obs;
        $pvacina->save();

        return redirect()->action('PvacinaController@index');
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

        $pvacina = Pvacina::find($id)
            ->delete();

        return redirect()->action('PvacinaController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $pvacina = Pvacina::all();

        //Invocar a view passando os dados
        return view ('pvacinas.listar') -> with ('pvacina', $pvacina);

    }
}
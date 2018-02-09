<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gvacina;

class GvacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gvacinas = Gvacina::all();
        return view('gvacinas.index')
            ->with('gvacinas', $gvacinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gvacinas.create');
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

        $gvacinas = Gvacina::Create($inputs);
        
        return redirect()->action('GvacinaController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gvacina = Gvacina::find($id);

        return view('gvacinas.show')
            ->with('gvacina', $gvacina);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gvacina = Gvacina::find($id);

        return view('gvacinas.edit', compact('gvacina', $gvacina));

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
        $gvacina = Gvacina::find($id);

        $gvacina->data = $request->data;
        $gvacina->hora = $request->hora;
        $gvacina->nome = $request->nome;
        $gvacina->obs = $request->obs;
        $gvacina->sugerido = $request->sugerido;
        $event->save();

        return redirect()->action('GvacinaController@index');
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

        $gvacina = Gvacina::find($id)
            ->delete();

        return redirect()->action('GvacinaController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $gvacina = Gvacina::all();

        //Invocar a view passando os dados
        return view ('gvacinas.listar') -> with ('gvacina', $gvacina);

    }
}
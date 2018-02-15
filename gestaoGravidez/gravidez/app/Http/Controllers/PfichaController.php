<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pficha;

class PfichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pfichas = Pficha::all();
        return view('pfichas.index')
            ->with('pfichas', $pfichas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pfichas.create');
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

        $pfichas = Pficha::Create($inputs);
        
        return redirect()->action('PfichaController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pficha = Pficha::find($id);

        return view('pfichas.show')
            ->with('pficha', $pficha);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pficha = Pficha::find($id);

        return view('pfichas.edit', compact('pficha', $pficha));

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
        $pficha = Pficha::find($id);

        $pficha->nome = $request->nome;
        $pficha->foto = $request->foto;
        $pficha->nascimento = $request->nascimento;
        $pficha->cidade = $request->cidade;
        $pficha->hospital = $request->hospital;
        $pficha->genitor1 = $request->genitor1;
        $pficha->genitor2 = $request->genitor2;
        $pficha->medico = $request->medico;
        $pficha->save();

        return redirect()->action('PfichaController@index');
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

        $pficha = Pficha::find($id)
            ->delete();

        return redirect()->action('PfichaController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $pficha = Pficha::all();

        //Invocar a view passando os dados
        return view ('pfichas.listar') -> with ('pficha', $pficha);

    }
}
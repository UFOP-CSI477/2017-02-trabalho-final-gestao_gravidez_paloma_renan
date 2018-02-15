<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gconsulta;

class GconsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gconsultas = Gconsulta::all();
        return view('gconsultas.index')
            ->with('gconsultas', $gconsultas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gconsultas.create');
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

        $gconsultas = Gconsulta::Create($inputs);
        
        return redirect()->action('GconsultaController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gconsulta = Gconsulta::find($id);

        return view('gconsultas.show')
            ->with('gconsulta', $gconsulta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gconsulta = Gconsulta::find($id);

        return view('gconsultas.edit', compact('gconsulta', $gconsulta));

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
        $gconsulta = Gconsulta::find($id);

        $gconsulta->data = $request->data;
        $gconsulta->hora = $request->hora;
        $gconsulta->medico = $request->medico;
        $gconsulta->obs = $request->obs;
        $gconsulta->sugerido = $request->sugerido;
        $gconsulta->save();

        return redirect()->action('GconsultaController@index');
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

        $gconsulta = Gconsulta::find($id)
            ->delete();

        return redirect()->action('GconsultaController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $gconsulta = Gconsulta::all();

        //Invocar a view passando os dados
        return view ('gconsultas.listar') -> with ('gconsulta', $gconsulta);

    }
}
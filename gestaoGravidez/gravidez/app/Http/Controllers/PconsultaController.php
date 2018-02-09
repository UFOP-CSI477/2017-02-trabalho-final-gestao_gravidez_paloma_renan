<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pconsulta;

class PconsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pconsultas = Pconsulta::all();
        return view('pconsultas.index')
            ->with('pconsultas', $pconsultas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pconsultas.create');
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

        $pconsultas = Pconsulta::Create($inputs);
        
        return redirect()->action('PconsultaController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pconsulta = Pconsulta::find($id);

        return view('pconsultas.show')
            ->with('Pconsulta', $Pconsulta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pconsulta = Pconsulta::find($id);

        return view('pconsultas.edit', compact('pconsulta', $pconsulta));

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
        $pconsulta = Pconsulta::find($id);

        $pconsulta->data = $request->data;
        $Pconsulta->hora = $request->hora;
        $Pconsulta->pediatra = $request->pediatra;
        $Pconsulta->obs = $request->obs;
        $event->save();

        return redirect()->action('PconsultaController@index');
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

        $Pconsulta = Pconsulta::find($id)
            ->delete();

        return redirect()->action('PconsultaController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $pconsulta = Pconsulta::all();

        //Invocar a view passando os dados
        return view ('pconsultas.listar') -> with ('pconsulta', $pconsulta);

    }
}
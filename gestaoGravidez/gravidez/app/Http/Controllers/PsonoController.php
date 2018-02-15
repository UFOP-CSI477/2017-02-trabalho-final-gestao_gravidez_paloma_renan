<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Psono;

class PsonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psonos = Psono::all();
        return view('psonos.index')
            ->with('psonos', $psonos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psonos.create');
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

        $psonos = Psono::Create($inputs);
        
        return redirect()->action('PsonoController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Psono = Psono::find($id);

        return view('psonos.show')
            ->with('psono', $psono);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psono = Psono::find($id);

        return view('psonos.edit', compact('psono', $psono));

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
        $psono = Psono::find($id);

        $psono->data = $request->data;
        $psono->hora = $request->hora;
        $psono->save();

        return redirect()->action('PsonosController@index');
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

        $psono = Psono::find($id)
            ->delete();

        return redirect()->action('PsonoController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $psono = Psono::all();

        //Invocar a view passando os dados
        return view ('psonos.listar') -> with ('psono', $psono);

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gdiario;

class GdiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gdiarios = Gdiario::all();
        return view('gdiarios.index')
            ->with('gdiarios', $gdiarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gdiarios.create');
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

        $gdiarios = Gdiario::Create($inputs);
        
        return redirect()->action('GdiarioController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galbun = Galbun::find($id);

        return view('gdiarios.show')
            ->with('gdiario', $gdiario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gdiario = Gdiario::find($id);

        return view('gdiarios.edit', compact('gdiario', $gdiario));

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
        $gdiario = Gdiario::find($id);

        $gdiario->data = $request->data;
        $gdiario->peso = $request->peso;
        $gdiario->altura = $request->altura;
        $gdiario->posicao = $request->posicao;
        $gdiario->descricao = $request->descricao;
        $event->save();

        return redirect()->action('GdiarioController@index');
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

        $gdiario = Gdiario::find($id)
            ->delete();

        return redirect()->action('GdiarioController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $gdiario = Gdiario::all();

        //Invocar a view passando os dados
        return view ('gdiarios.listar') -> with ('gdiario', $gdiario);

    }
}
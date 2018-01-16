<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index')
            ->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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

        $teachers = Teacher::Create($inputs);
        
        return redirect()->action('TeacherController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('teachers.show')
            ->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return view('teachers.edit', compact('teacher', $teacher));

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
        $teacher = Teacher::find($id);

        $teacher->cpf = $request->cpf;
        $teacher->registration = $request->registration;
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->birth = $request->birth;
        $teacher->save();

        return redirect()->action('TeacherController@index');
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

        $teacher = Teacher::find($id)
            ->delete();

        return redirect()->action('TeacherController@index');

    }


    public function __construct(){
            $this->middleware('Teacher',['only'=>['verifica']]);  //Verifica o acesso
    }
    public function verifica(){
        if(Auth::Teacher()->acesso <> 1){
            return redirect()->action('FrequencyController@erro'); // definindo frequencia no nível de acesso do professor
        }else{
            return redirect('/frequencies'); //caso permitido é direcionado à página
        }
    }
    public function erro(){
        return view('/acessonegado'); // caso contrário o acesso é negado
    }



    class FrequencyController extends Controller {

    public function __construct()
    {
        $this->middleware('nivel-1-middleware'); // criar um para cada tipo de acesso e registrar no construtor dos seus controllers.

//Por exemplo, se para usar o FrequencyController o usuário precisa ser nível 1.
    }


    class Nivel1Middleware {  //  implementação desse Middleware redirecionar para uma tela de erro caso o nível de acesso do usuário seja diferente de 1 

    public function handle($request, Closure $next)
    {
        if (\Auth::User()->acesso <> 1) 
        {
            return redirect('/url-de-nao-tem-acesso');
        }
        return $next($request); // ok, pode acessar
    }


    public function __construct(){
        $this->middleware('Teacher');
        $this->middleware('nivelacesso1');
    }
}



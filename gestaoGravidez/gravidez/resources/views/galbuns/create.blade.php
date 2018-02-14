@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'galbun.store'], [
        'class' => 'form-horizontal',
      ])
    !!}
      
    <div class = "form-group">

     {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a data",
        'required' => "", 
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('foto', 'Foto') !!}
      {!! Form::text('foto', null, [
        'class' => "form-control input-md",
        'type' => "image",
        'placeholder' => "Insira  a foto",
        'required' => "",
        ]) 
      !!}

    </div> 


    <div class = "form-group">

      {!!Form::submit('Inserir', [
          'class' => 'btn btn-success'
        ])
      !!}

    </div>

    {!!Form::close()!!}

    <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/galbun">Voltar</a>

  </div>
  
@stop
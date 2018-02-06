@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'gdesejo.store'], [
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

     {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::text('descricao', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a descrição",
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

  </div>
  
@stop
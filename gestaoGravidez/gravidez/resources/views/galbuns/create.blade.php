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
        'placeholder' => "Insira  a data e horário",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('foto', 'Foto') !!}
      {!! Form::text('foto', null, [
        'class' => "form-control input-md",
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

  </div>
  
@stop
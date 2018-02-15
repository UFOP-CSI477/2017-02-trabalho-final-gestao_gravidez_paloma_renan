@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($psono, [
      'method' => 'patch',
      'route' => ['psono.update', $psono->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $psono->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $psono->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('hora', 'Horário') !!}
      {!! Form::text('hora', $psono->hora, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o horário",
        'required' => "",
        ]) 
      !!}

    </div> 



    <div class = "form-group">

      {!!Form::submit('Editar', [
          'class' => 'btn btn-warning'
        ])
      !!}

    </div>

    {!!Form::close()!!}

  </div>

@stop
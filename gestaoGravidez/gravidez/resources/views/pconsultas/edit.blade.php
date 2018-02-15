@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pconsulta, [
      'method' => 'patch',
      'route' => ['pconsulta.update', $pconsulta->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $pconsulta->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $pconsulta->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('pediatra', 'Pediatra') !!}
      {!! Form::text('pediatra', $pconsulta->pediatra, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome do pediatra",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('obs', 'Observação') !!}
      {!! Form::text('obs', $pconsulta->obs, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma observação",
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
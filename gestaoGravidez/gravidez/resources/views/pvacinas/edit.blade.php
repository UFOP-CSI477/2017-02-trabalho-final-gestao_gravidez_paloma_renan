@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pvacina, [
      'method' => 'patch',
      'route' => ['pvacina.update', $pvacina->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $pvacina->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $pvacina->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('hora', 'Horário') !!}
      {!! Form::text('hora', $pvacina->hora, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o horário",
        'required' => "",
        ]) 
      !!}

    </div> 


    <div class = "form-group">

      {!! Form::label('nome', 'Dica') !!}
      {!! Form::text('nome', $pvacina->nome, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome da vacina",
        'required' => "",
        ]) 
      !!}

    </div>

    <div class = "form-group">

      {!! Form::label('obs', 'Observação') !!}
      {!! Form::text('obs', $pvacina->obs, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma observação",
        'required' => "",
        ]) 
      !!}


    <div class = "form-group">

      {!!Form::submit('Editar', [
          'class' => 'btn btn-warning'
        ])
      !!}

    </div>

    {!!Form::close()!!}

  </div>

@stop
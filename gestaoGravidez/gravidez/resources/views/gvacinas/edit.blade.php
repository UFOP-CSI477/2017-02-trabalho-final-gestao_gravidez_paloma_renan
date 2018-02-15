@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($gvacina, [
      'method' => 'patch',
      'route' => ['gvacina.update', $gvacina->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $gvacina->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $gvacina->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('hora', 'Horário') !!}
      {!! Form::text('hora', $gvacina->hora, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o horário",
        'required' => "",
        ]) 
      !!}

    </div> 

    

    <div class = "form-group">

      {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', $gvacina->nome, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome da vacina",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('obs', 'Observação') !!}
      {!! Form::text('obs', $gvacina->obs, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma observação",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('sugerido', 'Dica') !!}
      {!! Form::text('sugerido', $gvacina->sugerido, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma dica",
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
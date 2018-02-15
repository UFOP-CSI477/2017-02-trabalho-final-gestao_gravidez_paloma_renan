@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($gconsulta, [
      'method' => 'patch',
      'route' => ['galbun.update', $gconsulta->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $gconsulta->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $gconsulta->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('hora', 'Horário') !!}
      {!! Form::text('hora', $gconsulta->hora, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o horário",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('medico', 'Médico') !!}
      {!! Form::text('medico', $gconsulta->medico, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome do médico",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('obs', 'Observação') !!}
      {!! Form::text('obs', $gconsulta->obs, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma observação",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('sugerido', 'Dica') !!}
      {!! Form::text('sugerido', $gconsulta->sugerido, [
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